<?php

namespace Ns\Afterbuy\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class AbstractVorgangsInfo
 */
abstract class AbstractVorgangsInfo extends AbstractModel
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("VorgangsInfo1")
     * @var string
     */
    protected $vorgangsInfo1;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("VorgangsInfo2")
     * @var string
     */
    protected $vorgangsInfo2;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("VorgangsInfo3")
     * @var string
     */
    protected $vorgangsInfo3;

    /**
     * @return string
     */
    public function getVorgangsInfo1()
    {
        return $this->vorgangsInfo1;
    }

    /**
     * @return string
     */
    public function getVorgangsInfo2()
    {
        return $this->vorgangsInfo2;
    }

    /**
     * @return string
     */
    public function getVorgangsInfo3()
    {
        return $this->vorgangsInfo3;
    }
}
