<?php

namespace Ns\Afterbuy\Model\GetListerHistory\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class Platform
 */
class SiteFilter extends AbstractFilter
{
	/**
     * eBay Site Filter
     */
    const FILTER_SITE_US		= 0;
    const FILTER_SITE_CA		= 2;
    const FILTER_SITE_UK		= 3;
    const FILTER_SITE_AU		= 15;
    const FILTER_SITE_AT		= 16;
    const FILTER_SITE_BE_FR		= 23;	// french part
    const FILTER_SITE_FR		= 71;
    const FILTER_SITE_DE		= 77;
    const FILTER_SITE_IT		= 101;
    const FILTER_SITE_BE_NL		= 123;	// netherland part
    const FILTER_SITE_NL		= 146;
    const FILTER_SITE_ES		= 186;
    const FILTER_SITE_CH		= 195;
    const FILTER_SITE_IE		= 205;
    const FILTER_SITE_PL		= 212;

    /**
     * @param string $filterValue
     */
    public function __construct($filterValue)
    {
        parent::__construct('SiteID');

        $this->filterValues['FilterValue'] = $filterValue;
    }
}
