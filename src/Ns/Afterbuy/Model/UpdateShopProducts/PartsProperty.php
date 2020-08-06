<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;
use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractPartsProperty;

/**
 * Class PartsProperty
 */
class PartsProperty extends AbstractPartsProperty
{
    /**
     * @param string $propertyName
     * @return $this
     */
    public function setPropertyName($propertyName)
    {
        $this->propertyName = $propertyName;
        return $this;
    }

    /**
     * @param string $propertyValue
     * @return $this
     */
    public function setCatalogName($propertyValue)
    {
        $this->propertyValue = $propertyValue;
        return $this;
    }
}

