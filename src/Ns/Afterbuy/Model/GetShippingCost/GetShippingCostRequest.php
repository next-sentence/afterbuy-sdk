<?php

namespace Ns\Afterbuy\Model\GetShippingCost;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractRequest;
use Ns\Afterbuy\Model\AfterbuyGlobal;

/**
 * Class GetShippingServicesRequest
 *
 * @Serializer\XmlRoot("Request")
 */
class GetShippingCostRequest extends AbstractRequest
{
    const CALL_NAME = 'GetShippingCost';

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ItemsCount")
     * @var int
     */
    protected $itemsCount;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ItemsWeight")
     * @var float
     */
    protected $itemsWeight;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ItemsPrice")
     * @var float
     */
    protected $itemsPrice;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ShippingCountry")
     * @var float
     */
    protected $shippingCountry;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ShippingGroup")
     * @var float
     */
    protected $shippingGroup;

    /**
     * @Serializer\Type("array<integer>")
     * @Serializer\SerializedName("Products")
     * @Serializer\XmlList(entry="ProductID")
     * @var array
     */
    protected $products;

    /**
     * @param AfterbuyGlobal $afterbuyGlobal
     */
    public function __construct(AfterbuyGlobal $afterbuyGlobal)
    {
        parent::__construct($afterbuyGlobal);
        $this->setCallName(self::CALL_NAME);
    }

	/**
	 * global set... function for all members
	 *
	 * @param type $name
	 * @param type $arguments
	 * @return boolean|$this
	 */
//	public function __call( $name, $arguments ) {
//		if( substr( $name, 0, 3 ) !== 'set' ) {
//			return false;
//		}
//		$member = lcfirst( substr( $name, 3 ) );
//		if( property_exists( $this, $member ) ) {
//			$this->$member = $arguments[0];
//			return $this;
//		}
//		return false;
//	}

    /**
     * @param int $requestItemsCount
     *
     * @return $this
     */
    public function setItemsCount($requestItemsCount)
    {

        $this->itemsCount = $requestItemsCount;
        return $this;
    }

    /**
     * @param string $requestShippingCountry
     *
     * @return $this
     */
    public function setShippingCountry($requestShippingCountry)
    {

        $this->shippingCountry = $requestShippingCountry;
        return $this;
    }

    /**
     * @param string $requestShippingGroup
     *
     * @return $this
     */
    public function setShippingGroup($requestShippingGroup)
    {

        $this->shippingGroup = $requestShippingGroup;
        return $this;
    }

    /**
     * @param float $requestItemsWeight
     *
     * @return $this
     */
    public function setItemsWeight($requestItemsWeight)
    {
        $this->itemsWeight = $requestItemsWeight;
        return $this;
    }

    /**
     * @param float $requestItemsPrice
     *
     * @return $this
     */
    public function setItemsPrice($requestItemsPrice)
    {
        $this->itemsPrice = $requestItemsPrice;
        return $this;
    }

    /**
     * @param array $requestProductIds
     *
     * @return $this
     */
    public function setProducts($requestProductIds)
    {
        $this->products = $requestProductIds;
        return $this;
    }
}
