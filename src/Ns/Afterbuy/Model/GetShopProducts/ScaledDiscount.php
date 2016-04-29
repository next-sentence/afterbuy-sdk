<?php

namespace Ns\Afterbuy\Model\GetShopProducts;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\FloatType;

/**
 * Class ScaledDiscount
 */
class ScaledDiscount
{

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ScaledQuantity")
     * @var int
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
     * @return float
     */
    public function getScaledPrice()
    {
        return $this->scaledPrice->getValue();
    }

    /**
     * @return float
     */
    public function getScaledDPrice()
    {
        return $this->scaledDPrice->getValue()
            ;
    }
}
