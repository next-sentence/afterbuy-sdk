<?php

namespace Ns\Afterbuy\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class AbstractResponse
 */
class AbstractResponse extends AbstractModel
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CallStatus")
     * @var string
     */
    protected $callStatus;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CallName")
     * @var string
     */
    protected $callName;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("VersionID")
     * @var int
     */
    protected $versionId;

    /**
     * @return string
     */
    public function getCallStatus()
    {
        return $this->callStatus;
    }

    /**
     * @return string
     */
    public function getCallName()
    {
        return $this->callName;
    }

    /**
     * @return int
     */
    public function getVersionId()
    {
        return $this->versionId;
    }
}
