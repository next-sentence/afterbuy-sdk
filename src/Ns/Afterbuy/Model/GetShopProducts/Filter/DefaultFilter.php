<?php

namespace Ns\Afterbuy\Model\GetShopProducts\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class DefaultFilter
 */
class DefaultFilter extends AbstractFilter
{
    /**
     * will be returned only set products
     */
    const FILTER_ALL_SETS = 'AllSets';

    /**
     * will be returned only variation sets
     */
    const FILTER_VARIATIONS_SETS = 'VariationsSets';

    /**
     * will be returned only product sets
     */
    const FILTER_PRODUCT_SETS = 'ProductSets';

    /**
     * @param string $filterValue
     * @param bool $negateFilter
     */
    public function __construct($filterValue = self::FILTER_ALL_SETS, $negateFilter = false)
    {
        parent::__construct('DefaultFilter');

        $this->filterValues['FilterValue'] = $negateFilter ? ('not_' . $filterValue) : $filterValue;
    }
}
