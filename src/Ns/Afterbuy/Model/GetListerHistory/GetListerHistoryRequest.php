<?php

namespace Ns\Afterbuy\Model\GetListerHistory;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractRequest;
use Ns\Afterbuy\Model\AfterbuyGlobal;
use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class GetSoldItemsRequest
 *
 * @Serializer\XmlRoot("Request")
 */
class GetListerHistoryRequest extends AbstractRequest
{
    const CALL_NAME = 'GetListerHistory';

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

    /**
     * @return int
     */
    public function getMaxHistoryItems()
    {
        return $this->maxHistoryItems;
    }

    /**
     * @param $maxHistoryItems
     * @return $this
     */
    public function setMaxHistoryItems($maxHistoryItems)
    {
        $this->maxHistoryItems = $maxHistoryItems;

        return $this;
    }
}
