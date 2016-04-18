<?php

namespace Ns\Afterbuy\Model\GetSoldItems\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class PlatformFilter
 */
class PlatformFilter extends AbstractFilter
{
    /**
     * @param string $platform
     * @param bool   $negateFilter
     */
    public function __construct($platform, $negateFilter = false)
    {
        parent::__construct('Plattform');

        $this->filterValues['FilterValue'] = $negateFilter ? ('not_' . $platform) : $platform;
    }
}
