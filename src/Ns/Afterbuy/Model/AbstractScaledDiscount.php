<?php

namespace Ns\Afterbuy\Model;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class AbstractScaledDiscount
 */
abstract class AbstractScaledDiscount extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ScaledQuantity")
     * @var integer
     */
    protected $scaledQuantity;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ScaledPrice")
     * @var FloatType
     */
    protected $scaledPrice;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ScaledDPrice")
     * @var FloatType
     */
    protected $scaledDPrice;

    /**
     * @return int
     */
    public function getScaledQuantity()
    {
        return $this->scaledQuantity;
    }

    /**
     * @return FloatType
     */
    public function getScaledPrice()
    {
        return $this->scaledPrice;
    }

    /**
     * @return FloatType
     */
    public function getScaledDPrice()
    {
        return $this->scaledDPrice;
    }

}
