<?php

namespace Ns\Afterbuy\Model\GetListerHistory\Filter;

use \DateTime;
use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class DateFilter
 */
class DateFilter extends AbstractFilter {

    /**
     * @param string $filterValue
     */
    public function __construct()
    {
        parent::__construct('DateFilter');
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
