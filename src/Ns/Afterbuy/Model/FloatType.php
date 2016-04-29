<?php

namespace Ns\Afterbuy\Model;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlValue;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * @XmlRoot("Ns\Afterbuy\Model\FloatType")
 */
class FloatType
{
    private $value;

    public function __construct($value)
    {
        $this->value = (float) $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
