<?php

namespace Ns\Afterbuy\Model\GetListerHistory\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class Platform
 */
class AccountFilter extends AbstractFilter
{

    /**
     * @param string $filterValue
     */
    public function __construct($filterValue)
    {
        parent::__construct('AccountID');

        $this->filterValues['FilterValue'] = $filterValue;
    }
}
