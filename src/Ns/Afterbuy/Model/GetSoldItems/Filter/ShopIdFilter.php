<?php

namespace Ns\Afterbuy\Model\GetSoldItems\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class ShopIdFilter
 */
class ShopIdFilter extends AbstractFilter
{
    /**
     * @param int $shopId
     */
    public function __construct($shopId)
    {
        parent::__construct('ShopId');

        $this->filterValues['FilterValue'] = strval($shopId);
    }
}
