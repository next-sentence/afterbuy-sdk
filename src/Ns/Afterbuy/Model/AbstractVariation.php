<?php

namespace Ns\Afterbuy\Model;
use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\UpdateShopProducts\VariationValue;

/**
 * Class AbstractVariation
 */
abstract class AbstractVariation extends AbstractModel
{

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("VariationName")
     * @var string
     */
    protected $variationName;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\UpdateShopProducts\VariationValue>")
     * @Serializer\XmlList(entry="VariationValue")
     * @Serializer\SerializedName("VariationValues")
     * @var VariationValue[]
     */
    protected $variationValues;

    /**
     * @return string
     */
    public function getVariationName()
    {
        return $this->variationName;
    }

    /**
     * @return VariationValue[]
     */
    public function getVariationValues()
    {
        return $this->variationValues;
    }

}
