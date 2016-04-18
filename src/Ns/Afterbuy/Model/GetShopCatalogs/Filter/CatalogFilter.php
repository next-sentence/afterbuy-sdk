<?php

namespace Ns\Afterbuy\Model\GetShopCatalogs\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class CatalogFilter
 */
class CatalogFilter extends AbstractFilter
{
    /**
     * CatalogId Filter
     */
    const FILTER_CATALOG_ID = 'CatalogID';

    /**
     * @param string $value
     * @param string $name
     */
    public function __construct($value)
    {
        parent::__construct(self::FILTER_CATALOG_ID);

        $this->filterValues['FilterValue'] = strval($value);
    }
}
