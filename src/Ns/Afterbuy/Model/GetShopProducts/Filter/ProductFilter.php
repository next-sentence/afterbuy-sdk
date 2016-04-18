<?php

namespace Ns\Afterbuy\Model\GetShopProducts\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class ProductFilter
 */
class ProductFilter extends AbstractFilter
{
    /**
     * RangeId Filter
     */
    const FILTER_PRODUCT_ID = 'ProductID';

    /**
     * RangeAnr Filter
     */
    const FILTER_PRODUCT_ANR = 'Anr';

    /**
     * RangeAnr Filter
     */
    const FILTER_PRODUCT_EAN = 'Ean';

    /**
     * @param string $value
     * @param string $name
     */
    public function __construct($value, $name = self::FILTER_PRODUCT_ID)
    {
        parent::__construct($name);

        $this->filterValues['FilterValue'] = strval($value);
    }
}
