<?php

namespace Ns\Afterbuy\Model\UpdateSoldItems;

use Ns\Afterbuy\Model\AbstractVorgangsInfo;

/**
 * Class VorgangsInfo
 */
class VorgangsInfo extends AbstractVorgangsInfo
{
    /**
     * @param string $vorgangsInfo1
     *
     * @return $this
     */
    public function setVorgangsInfo1($vorgangsInfo1)
    {
        $this->vorgangsInfo1 = $vorgangsInfo1;

        return $this;
    }

    /**
     * @param string $vorgangsInfo2
     *
     * @return $this
     */
    public function setVorgangsInfo2($vorgangsInfo2)
    {
        $this->vorgangsInfo2 = $vorgangsInfo2;

        return $this;
    }

    /**
     * @param string $vorgangsInfo3
     *
     * @return $this
     */
    public function setVorgangsInfo3($vorgangsInfo3)
    {
        $this->vorgangsInfo3 = $vorgangsInfo3;

        return $this;
    }
}

