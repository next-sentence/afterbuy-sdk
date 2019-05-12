<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;
use Ns\Afterbuy\Model\AbstractAddCatalog;
use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\GetShopProducts\Attribute;

/**
 * Class AddAttribute
 */
class AddAttribute extends Attribute
{

    const TYPE_TEXT = 0;
    const TYPE_TEXTFIELD = 1;
    const TYPE_DROPDOWN = 2;
    const TYPE_LINK = 3;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("attributePosition")
     * @var int
     */
    protected $attributePosition;

    /**
     * @return int
     */
    public function getAttributePosition()
    {
        return $this->getAttributePosition();
    }

    /**
     * @param int $attributePosition
     * @return $this
     */
    public function setAttributePosition($attributePosition)
    {
        $this->attributePosition = $attributePosition;
        return $this;
    }

}

