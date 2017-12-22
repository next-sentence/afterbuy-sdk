<?php

namespace Ns\Afterbuy\Model\GetListerHistory\Filter;

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
     * RangeAnr Filter
     */
    const FILTER_RANGE_ANR = 'RangeAnr';

    /**
     * @param string $filterName
     */
    public function __construct($filterName = self::FILTER_RANGE_ID)
    {
        parent::__construct($filterName);
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
