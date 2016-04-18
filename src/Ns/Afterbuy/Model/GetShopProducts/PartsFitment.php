<?php

namespace Ns\Afterbuy\Model\GetShopProducts;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class PartsFitment
 */
class PartsFitment
{
    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetShopProducts\PartsProperty>")
     * @Serializer\SerializedName("PartsProperties")
     * @Serializer\XmlList(entry="PartsProperty")
     * @var PartsProperty[]
     */
    protected $partsProperties;

    /**
     * @return PartsProperty[]
     */
    public function getPartsProperties()
    {
        return $this->partsProperties;
    }
}
