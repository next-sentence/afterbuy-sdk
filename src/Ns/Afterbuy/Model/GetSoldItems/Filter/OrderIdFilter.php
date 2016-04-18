<?php

namespace Ns\Afterbuy\Model\GetSoldItems\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class OrderIdFilter
 */
class OrderIdFilter extends AbstractFilter
{
    /**
     * @param int $orderId
     */
    public function __construct($orderId)
    {
        parent::__construct('OrderID');

        $this->filterValues['FilterValue'] = strval($orderId);
    }
}
