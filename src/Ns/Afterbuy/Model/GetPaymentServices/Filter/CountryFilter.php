<?php

namespace Ns\Afterbuy\Model\GetPaymentServices\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class CountryFilter
 */
class CountryFilter extends AbstractFilter
{
    /**
     * @param string $filterValue
     */
    public function __construct($filterValue)
    {
        parent::__construct('Land');

        $this->filterValues['FilterValue'] = $filterValue;
    }
}
