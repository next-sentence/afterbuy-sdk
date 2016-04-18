<?php

namespace Ns\Afterbuy\Model\GetShopCatalogs\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class RangeFilter
 */
class RangeFilter extends AbstractFilter
{
    /**
     * RangeId Filter
     */
    const FILTER_RANGE_ID = 'RangeID';

    /**
     */
    public function __construct()
    {
        parent::__construct(self::FILTER_RANGE_ID);
    }

    /**
     * @return int
     */
    public function getValueFrom()
    {
        return $this->filterValues['ValueFrom'];
    }

    /**
     * @param int $valueFrom
     *
     * @return $this
     */
    public function setValueFrom($valueFrom)
    {
        $this->filterValues['ValueFrom'] = $valueFrom;

        return $this;
    }

    /**
     * @return int
     */
    public function getValueTo()
    {
        return $this->filterValues['ValueTo'];
    }

    /**
     * @param int $valueTo
     *
     * @return $this
     */
    public function setValueTo($valueTo)
    {
        $this->filterValues['ValueTo'] = $valueTo;

        return $this;
    }
}
