<?php

namespace Ns\Afterbuy\Model\GetShopCatalogs;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractRequest;
use Ns\Afterbuy\Model\AfterbuyGlobal;
use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class GetShopCatalogsRequest
 *
 * @Serializer\XmlRoot("Request")
 */
class GetShopCatalogsRequest extends AbstractRequest
{
    const CALL_NAME = 'GetShopCatalogs';

    /**
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getMaxCatalogs", setter="setMaxCatalogs")
     * @Serializer\SerializedName("MaxCatalogs")
     * @var int
     */
    protected $maxCatalogs;

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
    public function getMaxCatalogs()
    {
        return $this->maxCatalogs;
    }

    /**
     * @param $maxCatalogs
     * @return $this
     */
    public function setMaxCatalogs($maxCatalogs)
    {
        $this->maxCatalogs = $maxCatalogs;

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
