<?php

namespace Ns\Afterbuy\Model\GetShopProducts;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractRequest;
use Ns\Afterbuy\Model\AfterbuyGlobal;
use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class GetShopProductsRequest
 *
 * @Serializer\XmlRoot("Request")
 */
class GetShopProductsRequest extends AbstractRequest
{
    const CALL_NAME = 'GetShopProducts';

    /**
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getMaxShopItems", setter="setMaxShopItems")
     * @Serializer\SerializedName("MaxShopItems")
     * @var int
     */
    protected $maxShopItems;

    /**
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="isPaginationEnabled", setter="setPaginationEnabled")
     * @Serializer\SerializedName("PaginationEnabled")
     * @var bool
     */
    protected $paginationEnabled;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("SuppressBaseProductRelatedData")
     * @var int
     */
    protected $suppressBaseProductRelatedData;

    /**
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getPageNumber", setter="setPageNumber")
     * @Serializer\SerializedName("PageNumber")
     * @var integer
     */
    protected $pageNumber;
    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\AbstractFilter>")
     * @Serializer\XmlList(entry="Filter")
     * @Serializer\SerializedName("DataFilter")
     * @var AbstractFilter[]
     */
    protected $filters;

    /**
     * @param AfterbuyGlobal $afterbuyGlobal
     */
    public function __construct(AfterbuyGlobal $afterbuyGlobal)
    {
        parent::__construct($afterbuyGlobal);

        $this->setCallName(self::CALL_NAME);
    }

    /**
     * @return int
     */
    public function getSuppressBaseProductRelatedData()
    {
        return $this->suppressBaseProductRelatedData;
    }

    /**
     * @return int
     */
    public function getMaxShopItems()
    {
        return $this->maxShopItems;
    }

    /**
     * @param $maxShopItems
     * @return $this
     */
    public function setMaxShopItems($maxShopItems)
    {
        $this->maxShopItems = $maxShopItems;

        return $this;
    }

    /**
     * @return int
     */
    public function isPaginationEnabled()
    {
        return $this->paginationEnabled;
    }

    /**
     * @param $paginationEnabled
     * @return $this
     */
    public function setPaginationEnabled($paginationEnabled)
    {
        $this->paginationEnabled = $paginationEnabled;

        return $this;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * @param int $pageNumber
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;

        return $this;
    }

    /**
     * @return AbstractFilter
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * @param AbstractFilter[] $filters
     *
     * @return $this
     */
    public function setFilters(array $filters)
    {
        $this->filters = $filters;

        return $this;
    }

    /**
     * @param AbstractFilter $filter
     *
     * @return $this
     */
    public function addFilter(AbstractFilter $filter)
    {
        $this->filters[] = $filter;

        return $this;
    }
}
