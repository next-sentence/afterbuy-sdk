<?php

namespace Ns\Afterbuy\Model\GetSoldItems\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class UserIdFilter
 */
class UserIdFilter extends AbstractFilter
{
    /**
     * @param int $userId
     */
    public function __construct($userId)
    {
        parent::__construct('AfterbuyUserID');

        $this->filterValues['FilterValue'] = strval($userId);
    }
}
