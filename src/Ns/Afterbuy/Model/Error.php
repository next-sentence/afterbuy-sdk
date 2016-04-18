<?php

namespace Ns\Afterbuy\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Error
 */
class Error extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ErrorCode")
     * @var int
     */
    protected $errorCode;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ErrorDescription")
     * @var string
     */
    protected $errorDescription;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ErrorLongDescription")
     * @var string
     */
    protected $errorLongDescription;

    /**
     * @return int
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @return string
     */
    public function getErrorDescription()
    {
        return $this->errorDescription;
    }

    /**
     * @return string
     */
    public function getErrorLongDescription()
    {
        return $this->errorLongDescription;
    }
}
