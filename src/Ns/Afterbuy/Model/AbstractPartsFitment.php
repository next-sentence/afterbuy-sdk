<?php

namespace Ns\Afterbuy\Model;
use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\UpdateShopProducts\PartsProperty;
use Ns\Afterbuy\Model\UpdateShopProducts\VariationValue;

/**
 * Class AbstractPartsFitment
 */
abstract class AbstractPartsFitment extends AbstractModel
{

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\UpdateShopProducts\PartsProperty>")
     * @Serializer\XmlList(entry="PartsProperty")
     * @Serializer\SerializedName("PartsProperties")
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
