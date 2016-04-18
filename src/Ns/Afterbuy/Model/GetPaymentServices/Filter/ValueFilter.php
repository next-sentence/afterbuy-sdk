<?php

namespace Ns\Afterbuy\Model\GetPaymentServices\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class Value
 */
class ValueFilter extends AbstractFilter
{
    /**
     * @param string $filterValue
     */
    public function __construct($filterValue)
    {
        parent::__construct('ValueOfGoods');

        $this->filterValues['FilterValue'] = $filterValue;
    }
}
