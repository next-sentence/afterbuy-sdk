<?php

namespace Ns\Afterbuy\Model\GetSoldItems\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class UserDefinedFlagFilter
 */
class UserDefinedFlagFilter extends AbstractFilter
{
    /**
     * @param string $flagId
     */
    public function __construct($flagId)
    {
        parent::__construct('UserDefinedFlag');

        $this->filterValues['FilterValue'] = $flagId;
    }
}
