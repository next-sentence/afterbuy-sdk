<?php

namespace Ns\Afterbuy\Model\GetShopProducts\Filter;

use \DateTime;
use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class DateFilter
 */
class DateFilter extends AbstractFilter
{
    /**
     * last update of the order
     */
    const FILTER_MOD_DATE = 'ModDate';

    /**
     * @param string $filterValue
     */
    public function __construct($filterValue = self::FILTER_MOD_DATE)
    {
        parent::__construct('DateFilter');

        $this->filterValues['FilterValue'] = $filterValue;
    }

    /**
     * @return DateTime
     */
    public function getDateFrom()
    {
        return new DateTime($this->filterValues['DateFrom']);
    }

    /**
     * @param DateTime $dateFrom
     *
     * @return $this
     */
    public function setDateFrom($dateFrom)
    {
        $this->filterValues['DateFrom'] = $dateFrom->format('d.m.Y H:i:s');

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateTo()
    {
        return new DateTime($this->filterValues['DateTo']);
    }

    /**
     * @param DateTime $dateTo
     *
     * @return $this
     */
    public function setDateTo($dateTo)
    {
        $this->filterValues['DateTo'] = $dateTo->format('d.m.Y H:i:s');

        return $this;
    }
}
