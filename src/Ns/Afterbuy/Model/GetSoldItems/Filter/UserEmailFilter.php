<?php

namespace Ns\Afterbuy\Model\GetSoldItems\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class UserEmailFilter
 */
class UserEmailFilter extends AbstractFilter
{
    /**
     * @param string $email
     */
    public function __construct($email)
    {
        parent::__construct('AfterbuyUserEmail');

        $this->filterValues['FilterValue'] = $email;
    }
}
