<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;
use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

/**
 * Class PartsProperties
 */
class PartsProperties extends AbstractModel
{

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\UpdateShopProducts\PartsProperties>")
     * @Serializer\SerializedName("PartsProperties")
     * @Serializer\XmlList(entry="PartsProperty")
     * @var PartsProperties[]
     */
    protected $partsProperties;

    /**
     * @return PartsProperties[]
     */
    public function getPartsProperties()
    {
        return $this->partsProperties;
    }

    /**
     * @param PartsProperties[] $partsProperties
     */
    public function setPartsProperties(array $partsProperties)
    {
        $this->partsProperties = $partsProperties;
    }

    /**
     * @param PartsProperties $partsProperty
     * @return $this
     */
    public function addPartsProperty($partsProperty)
    {
        $this->partsProperties[] = $partsProperty;
        return $this;
    }

}

