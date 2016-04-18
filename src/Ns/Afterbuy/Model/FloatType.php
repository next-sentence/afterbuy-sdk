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
//    /**
//     * @Type("float")
//     * @XmlValue
//     */
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
