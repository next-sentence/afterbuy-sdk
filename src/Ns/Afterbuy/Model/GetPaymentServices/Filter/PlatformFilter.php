<?php

namespace Ns\Afterbuy\Model\GetPaymentServices\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class Platform
 */
class PlatformFilter extends AbstractFilter
{
    /**
     * @param string $filterValue
     */
    public function __construct($filterValue)
    {
        parent::__construct('Plattform');

        $this->filterValues['FilterValue'] = $filterValue;
    }
}
