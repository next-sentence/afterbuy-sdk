<?php

namespace Ns\Afterbuy\Model\GetShopProducts;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class PartsProperty
 */
class PartsProperty
{

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PropertyName")
     * @var string
     */
    protected $propertyName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PropertyValue")
     * @var string
     */
    protected $propertyValue;

    /**
     * @return string
     */
    public function getPropertyName()
    {
        return $this->propertyName;
    }

    /**
     * @return string
     */
    public function getPropertyValue()
    {
        return $this->propertyValue;
    }
}
