<?php

namespace Ns\Afterbuy\Model\GetListerHistory\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class Platform
 */
class PlatformFilter extends AbstractFilter
{

	/**
     * Platform Filter
     */
    const FILTER_PLATFORM_EBAY		= 'eBay';
    const FILTER_PLATFORM_ELIMBO	= 'elimbo';
    const FILTER_PLATFORM_AMAZON	= 'AmazonSC';
    const FILTER_PLATFORM_HOOD		= 'Hood';
    const FILTER_PLATFORM_AUVITO	= 'Auvito';
    const FILTER_PLATFORM_AUXION	= 'Auxion';

    /**
     * @param string $filterValue
     */
    public function __construct($filterValue = self::FILTER_PLATFORM_EBAY)
    {
        parent::__construct('Plattform');

        $this->filterValues['FilterValue'] = $filterValue;
    }
}
