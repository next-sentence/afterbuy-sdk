<?php

namespace Ns\Afterbuy\Client;

use Doctrine\Common\Annotations\AnnotationRegistry;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\BadResponseException;
use Ns\Afterbuy\Model\GetShopProducts\Product;
use Ns\Afterbuy\Model\UpdateShopProducts\UpdateShopProductsRequest;
use Ns\Afterbuy\Model\UpdateShopProductsResponse\UpdateShopProductsResponse;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;
use JMS\Serializer\Handler\ArrayCollectionHandler;
use JMS\Serializer\Handler\HandlerRegistry;
use JMS\Serializer\Handler\PhpCollectionHandler;
use JMS\Serializer\Handler\PropelCollectionHandler;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use JMS\Serializer\XmlDeserializationVisitor;
use JMS\Serializer\XmlSerializationVisitor;
use Ns\Afterbuy\Serializer\DateHandler;
use Ns\Afterbuy\Serializer\FloatHandler;
use Ns\Afterbuy\Model\AbstractRequest;
use Ns\Afterbuy\Model\AbstractResponse;
use Ns\Afterbuy\Model\AfterbuyGlobal;
use Ns\Afterbuy\Model\AbstractFilter;
use Ns\Afterbuy\Model\GetPaymentServices\GetPaymentServicesRequest;
use Ns\Afterbuy\Model\GetPaymentServices\GetPaymentServicesResponse;
use Ns\Afterbuy\Model\GetShippingServices\GetShippingServicesRequest;
use Ns\Afterbuy\Model\GetShippingServices\GetShippingServicesResponse;
use Ns\Afterbuy\Model\GetShopCatalogs\GetShopCatalogsRequest;
use Ns\Afterbuy\Model\GetShopCatalogs\GetShopCatalogsResponse;
use Ns\Afterbuy\Model\GetShopProducts\GetShopProductsRequest;
use Ns\Afterbuy\Model\GetShopProducts\GetShopProductsResponse;
use Ns\Afterbuy\Model\GetStockInfo\GetStockInfoRequest;
use Ns\Afterbuy\Model\GetStockInfo\GetStockInfoResponse;
use Ns\Afterbuy\Model\GetSoldItems\GetSoldItemsRequest;
use Ns\Afterbuy\Model\GetSoldItems\GetSoldItemsResponse;

use Ns\Afterbuy\Model\GetListerHistory\GetListerHistoryRequest;
use Ns\Afterbuy\Model\GetListerHistory\GetListerHistoryResponse;
use Ns\Afterbuy\Model\GetAfterbuyTime\GetAfterbuyTimeRequest;
use Ns\Afterbuy\Model\GetAfterbuyTime\GetAfterbuyTimeResponse;
use Ns\Afterbuy\Model\GetShippingCost\GetShippingCostRequest;
use Ns\Afterbuy\Model\GetShippingCost\GetShippingCostResponse;

use Ns\Afterbuy\Model\UpdateSoldItems\UpdateSoldItemsRequest;
use Ns\Afterbuy\Model\UpdateSoldItems\UpdateSoldItemsResponse;
use Ns\Afterbuy\Model\UpdateSoldItems\Order;

/**
 * Class Request
 */
class Request implements LoggerAwareInterface
{
    /**
     * @var LoggerInterface
     */
    protected $logger;
    /**
     * @var ClientInterface
     */
    protected $client;
    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * @var AfterbuyGlobal
     */
    protected $afterbuyGlobal;

    protected $uri = 'https://api.afterbuy.de/afterbuy/ABInterface.aspx';

    /**
     * @param string $userId
     * @param string $userPassword
     * @param int    $partnerId
     * @param string $partnerPassword
     * @param string $errorLanguage
     * @param string $doctypeWhitelist
     */
    public function __construct($userId, $userPassword, $partnerId, $partnerPassword, $errorLanguage, $doctypeWhitelist)
    {
        AnnotationRegistry::registerLoader('class_exists');

        $this->afterbuyGlobal = new AfterbuyGlobal($userId, $userPassword, $partnerId, $partnerPassword, $errorLanguage);
        $this->client = new \GuzzleHttp\Client(array('base_uri' => $this->uri));

        $builder = SerializerBuilder::create()
            ->configureHandlers(self::getHandlerConfiguration());

        if ($doctypeWhitelist) {
            $namingStrategy = new SerializedNameAnnotationStrategy(new CamelCaseNamingStrategy());
            $xmlSerVisitor = new XmlSerializationVisitor($namingStrategy);
            $xmlDesVisitor = new XmlDeserializationVisitor($namingStrategy);
            $xmlDesVisitor->setDoctypeWhitelist($doctypeWhitelist);
            $builder->setSerializationVisitor('xml', $xmlSerVisitor)
                ->setDeserializationVisitor('xml', $xmlDesVisitor);
        }

        $this->serializer = $builder->build();
    }

    /**
     * @return \Closure
     */
    public static function getHandlerConfiguration()
    {
        return function (HandlerRegistry $registry) {
            $registry->registerSubscribingHandler(new DateHandler());
            $registry->registerSubscribingHandler(new FloatHandler());
            $registry->registerSubscribingHandler(new PhpCollectionHandler());
            $registry->registerSubscribingHandler(new ArrayCollectionHandler());
            $registry->registerSubscribingHandler(new PropelCollectionHandler());
        };
    }

    /**
     * @return LoggerInterface
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * @param LoggerInterface $logger
     *
     * @return $this
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;

        return $this;
    }

    /**
     * @param AbstractFilter[] $filters
     * @param int              $detailLevel
     *
     * @return GetPaymentServicesResponse|null
     */
    public function getPaymentServices(array $filters = array(), $detailLevel = AfterbuyGlobal::DETAIL_LEVEL_PROCESS_DATA)
    {
        $request = (new GetPaymentServicesRequest($this->afterbuyGlobal))
            ->setFilters($filters)
            ->setDetailLevel($detailLevel);

        return $this->serializeAndSubmitRequest($request, GetPaymentServicesResponse::class);
    }

    /**
     * @param int $detailLevel
     *
     * @return GetShippingServicesResponse|null
     */
    public function getShippingServices($detailLevel = AfterbuyGlobal::DETAIL_LEVEL_PROCESS_DATA)
    {
        $request = (new GetShippingServicesRequest($this->afterbuyGlobal))
            ->setDetailLevel($detailLevel);

        return $this->serializeAndSubmitRequest($request, GetShippingServicesResponse::class);
    }
    /**
     * @param array $filters
     * @param int   $detailLevel
     *
     * @return GetStockInfoResponse|null
     */
    public function getStockInfo(array $filters, $detailLevel = AfterbuyGlobal::DETAIL_LEVEL_PROCESS_DATA)
    {
        $request = (new GetStockInfoRequest($this->afterbuyGlobal))
            ->setFilters($filters)
            ->setDetailLevel($detailLevel);

        return $this->serializeAndSubmitRequest($request, GetStockInfoResponse::class);
    }

    /**
     * @param array $filters
     * @param int $page
     * @param int $maxShopProducts
     * @param bool|true $enablePagination
     * @param int $detailLevel
     * @return GetShopProductsResponse|null
     */
    public function getShopProducts(array $filters = array(), $page = 1, $maxShopProducts = 250,
		$enablePagination = true, $detailLevel = AfterbuyGlobal::DETAIL_LEVEL_PROCESS_DATA
	)
    {
        $request = (new GetShopProductsRequest($this->afterbuyGlobal))
            ->setFilters($filters)
            ->setDetailLevel($detailLevel)
            ->setMaxShopItems($maxShopProducts)
            ->setPaginationEnabled((int) $enablePagination)
            ->setPageNumber($page)
            ;

        return $this->serializeAndSubmitRequest($request, GetShopProductsResponse::class);
    }

    /**
     * @param array $filters
     * @param int $page
     * @param int $maxHistoryProducts
     * @param bool|true $enablePagination
     * @param int $detailLevel
     * @return GetShopProductsResponse|null
     */
    public function getListerHistory(array $filters = array(), $page = 1, $maxHistoryProducts = 250,
		$enablePagination = true, $detailLevel = AfterbuyGlobal::DETAIL_LEVEL_PROCESS_DATA
	)
    {
        $request = (new GetListerHistoryRequest($this->afterbuyGlobal))
            ->setFilters($filters)
            ->setDetailLevel($detailLevel)
            ->setMaxHistoryItems($maxHistoryProducts)
            ;
        return $this->serializeAndSubmitRequest($request, GetListerHistoryResponse::class);
    }

    /**
     * @param array $filters
     * @param int $maxCatalogs
     * @param int $detailLevel
     * @return GetShopCatalogsResponse|null
     */
    public function getShopCatalogs(array $filters = array(), $maxCatalogs = 200,
		$detailLevel = AfterbuyGlobal::DETAIL_LEVEL_PROCESS_DATA
	)
    {
        $request = (new GetShopCatalogsRequest($this->afterbuyGlobal))
            ->setFilters($filters)
            ->setDetailLevel($detailLevel)
            ->setMaxCatalogs($maxCatalogs)
            ;

        return $this->serializeAndSubmitRequest($request, GetShopCatalogsResponse::class);
    }

    /**
     * @param AbstractFilter[] $filters
     * @param bool             $orderDirection
     * @param int              $maxSoldItems
     * @param int              $detailLevel
     *
     * @return GetSoldItemsResponse|null
     */
    public function getSoldItems(array $filters = array(), $orderDirection = false,
		$maxSoldItems = 250, $detailLevel = AfterbuyGlobal::DETAIL_LEVEL_PROCESS_DATA
	)
    {
        $request = (new GetSoldItemsRequest($this->afterbuyGlobal))
            ->setFilters($filters)
            ->setDetailLevel($detailLevel)
            ->setMaxSoldItems($maxSoldItems)
            ->setOrderDirection(intval($orderDirection));

        return $this->serializeAndSubmitRequest($request, GetSoldItemsResponse::class);
    }

    /**
     * @param array			   $productIds
     * @param int              $itemsCount
     * @param float            $itemsWeight
     * @param float            $itemsPrice
     * @param string           $shippingCountry
     * @param string           $shippingGroup
     * @param int              $detailLevel
     *
     * @return GetSoldItemsResponse|null
     */
    public function getShippingCost( array $productIds, $itemsCount = 1,
		$itemsWeight = 1000, $itemsPrice = 1, $shippingCountry = null,
		$shippingGroup = null,
		$detailLevel = AfterbuyGlobal::DETAIL_LEVEL_PROCESS_DATA
	)
    {
        $request = (new GetShippingCostRequest($this->afterbuyGlobal))
            ->setDetailLevel( $detailLevel )
			->setItemsCount( $itemsCount )
			->setItemsWeight( new \Ns\Afterbuy\Model\FloatType( $itemsWeight ) )
			->setItemsPrice( new \Ns\Afterbuy\Model\FloatType( $itemsPrice ) )
			->setShippingCountry( $shippingCountry )
			->setShippingGroup( $shippingGroup )
			->setProducts( $productIds )
            ;

        return $this->serializeAndSubmitRequest($request, GetShippingCostResponse::class);
    }

    /**
     * @param AbstractFilter[] $filters
     * @param bool             $orderDirection
     * @param int              $maxSoldItems
     * @param int              $detailLevel
     *
     * @return GetSoldItemsResponse|null
     */
    public function getAfterbuyTime()
    {
        $request = (new GetAfterbuyTimeRequest($this->afterbuyGlobal));
        return $this->serializeAndSubmitRequest($request, GetAfterbuyTimeResponse::class);
    }

    /**
     * @param Order[] $orders
     * @param int     $detailLevel
     *
     * @return UpdateSoldItemsResponse|null
     */
    public function updateSoldItems(array $orders, $detailLevel = AfterbuyGlobal::DETAIL_LEVEL_PROCESS_DATA)
    {
        $request = (new UpdateSoldItemsRequest($this->afterbuyGlobal))
            ->setDetailLevel($detailLevel)
            ->setOrders($orders);

        return $this->serializeAndSubmitRequest($request, UpdateSoldItemsResponse::class);
    }

    /**
     * @param \Ns\Afterbuy\Model\UpdateShopProducts\Product[] $products
     * @param int                                             $detailLevel
     *
     * @return AbstractResponse|UpdateShopProductsResponse
     */
    public function updateShopProducts(array $products, $detailLevel = AfterbuyGlobal::DETAIL_LEVEL_PROCESS_DATA)
    {
        $request = (new UpdateShopProductsRequest($this->afterbuyGlobal))
            ->setDetailLevel($detailLevel)
            ->setProducts($products);

        return $this->serializeAndSubmitRequest($request, UpdateShopProductsResponse::class);
    }

    /**
     * Logs to a logger, when given
     *
     * @param string|LogLevel  $level
     * @param string $message
     * @param array  $context
     */
    protected function log($level, $message, array $context = array())
    {
        if ($this->logger) {
            $this->logger->log($level, $message, $context);
        }
    }

    /**
     * @param AbstractRequest $request
     * @param string          $type
     *
     * @return AbstractResponse|null
     */
    protected function serializeAndSubmitRequest(AbstractRequest $request, $type)
    {
        $xml = $this->serializer->serialize($request, 'xml');
        $options = array('body' => $xml, '_conditional' => array('Content-Type' => 'text/xml'));
        $this->log(LogLevel::DEBUG, 'Posted to Afterbuy with the following options: ', $options);

        try {
            $response = $this->client->request('POST', null, $options);
            $this->log(LogLevel::DEBUG, sprintf('Afterbuy response: %s', $response->getBody()));
        } catch (BadResponseException $exception) {
            $this->log(LogLevel::ERROR, $exception->getMessage());

            return null;
        }

        if ($response->getStatusCode() != 200) {
            $this->log(LogLevel::ERROR, sprintf('Afterbuy responded with HTTP status code %d', $response->getStatusCode()));

            return null;
        }
        try {
            $object = $this->serializer->deserialize((string) $response->getBody(), $type, 'xml');
        } catch (\Exception $exception) {
            $this->log(LogLevel::ERROR, $exception->getMessage());
//			pr( (string)$response->getBody() );
            return null;
        }

        return $object;
    }
}
