<?php

namespace Ns\Afterbuy\Model\GetShopProducts;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Attribute
 */
class Attribute
{

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("AttributName")
     * @var string
     */
    protected $attributeName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("AttributWert")
     * @var string
     */
    protected $attributeWert;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("AttributTyp")
     * @var int
     */
    protected $attributeTyp;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("AttributRequired")
     * @var int
     */
    protected $attributeRequired;

    /**
     * @return string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @return string
     */
    public function getAttributeWert()
    {
        return $this->attributeWert;
    }

    /**
     * @return int
     */
    public function getAttributeTyp()
    {
        return $this->attributeTyp;
    }

    /**
     * @return int
     */
    public function getAttributeRequired()
    {
        return $this->attributeRequired;
    }
}
