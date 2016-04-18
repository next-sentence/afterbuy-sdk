<?php

namespace Ns\Afterbuy\Model\GetShopProducts\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class LevelFilter
 */
class LevelFilter extends AbstractFilter
{
    public function __construct()
    {
        parent::__construct('Level');
    }

    /**
     * @return int
     */
    public function getLevelFrom()
    {
        return $this->filterValues['LevelFrom'];
    }

    /**
     * @param int $levelFrom
     *
     * @return $this
     */
    public function setLevelFrom($levelFrom)
    {
        $this->filterValues['LevelFrom'] = $levelFrom;

        return $this;
    }

    /**
     * @return int
     */
    public function getLevelTo()
    {
        return $this->filterValues['LevelTo'];
    }

    /**
     * @param int $levelTo
     *
     * @return $this
     */
    public function setLevelTo($levelTo)
    {
        $this->filterValues['LevelTo'] = $levelTo;

        return $this;
    }
}
