<?php

namespace Ns\Afterbuy\Model\GetListerHistory\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class Platform
 */
class ListingTypeFilter extends AbstractFilter
{
	/**
     * Listing Type Filter
     */
    const FILTER_EBAY_AUCTION			= 1;
    const FILTER_EBAY_POWER_AUCTION		= 2;
    const FILTER_EBAY_STORE				= 7;
    const FILTER_EBAY_FIX_PRICE			= 9;

    const FILTER_AZUBO_AUCTION			= 1;
    const FILTER_AZUBO_FIX_PRICE		= 9;

    const FILTER_ELIMBO_FIX_PRICE		= 0;

    /**
     * @param string $filterValue
     */
    public function __construct($filterValue)
    {
        parent::__construct('ListingType');

        $this->filterValues['FilterValue'] = $filterValue;
    }
}
