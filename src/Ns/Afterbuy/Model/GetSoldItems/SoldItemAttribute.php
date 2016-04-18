<?php

namespace Ns\Afterbuy\Model\GetSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

/**
 * Class SoldItemAttribute
 */
class SoldItemAttribute extends AbstractModel
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("AttributeName")
     * @var string
     */
    protected $attributeName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("AttributeValue")
     * @var string
     */
    protected $attributeValue;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("AttributePosition")
     * @var int
     */
    protected $attributePosition;

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
    public function getAttributeValue()
    {
        return $this->attributeValue;
    }

    /**
     * @return int
     */
    public function getAttributePosition()
    {
        return $this->attributePosition;
    }
}
