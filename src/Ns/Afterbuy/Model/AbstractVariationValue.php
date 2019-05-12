<?php

namespace Ns\Afterbuy\Model;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class AbstractVariationValue
 */
abstract class AbstractVariationValue extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ValidForProdID")
     * @var int
     */
    protected $validForProdID;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("VariationValue")
     * @var string
     */
    protected $variationValue;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("VariationPos")
     * @var int
     */
    protected $variationPos;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("VariationPicURL")
     * @var string
     */
    protected $variationPicURL;

    /**
     * @return integer
     */
    public function getValidForProdID()
    {
        return $this->validForProdID;
    }

    /**
     * @return string
     */
    public function getVariationValue()
    {
        return $this->variationValue;
    }

    /**
     * @return integer
     */
    public function getVariationPos()
    {
        return $this->variationPos;
    }

    /**
     * @return string
     */
    public function getVariationPicURL()
    {
        return $this->variationPicURL;
    }

}
