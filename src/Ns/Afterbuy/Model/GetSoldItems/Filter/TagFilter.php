<?php

namespace Ns\Afterbuy\Model\GetSoldItems\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class TagFilter
 */
class TagFilter extends AbstractFilter
{
    /**
     * @param string $tag
     */
    public function __construct($tag)
    {
        parent::__construct('Tag');

        $this->filterValues['FilterValue'] = $tag;
    }
}
