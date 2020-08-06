<?php

namespace Ns\Afterbuy\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Error
 */
class Warning extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("WarningCode")
     * @var int
     */
    protected $warningCode;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("WarningDescription")
     * @var string
     */
    protected $warningDescription;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("WarningLongDescription")
     * @var string
     */
    protected $warningLongDescription;

    /**
     * @return int
     */
    public function getWarningCode()
    {
        return $this->warningCode;
    }

    /**
     * @return string
     */
    public function getWarningDescription()
    {
        return $this->warningDescription;
    }

    /**
     * @return string
     */
    public function getWarningLongDescription()
    {
        return $this->warningLongDescription;
    }
}
