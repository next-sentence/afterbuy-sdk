<?php

namespace Ns\Afterbuy\Model\GetShopProducts;

use JMS\Serializer\Annotation as Serializer;

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
     * @var float
     */
    protected $scaledPrice;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ScaledDPrice")
     * @var float
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
        return $this->scaledPrice;
    }

    /**
     * @return float
     */
    public function getScaledDPrice()
    {
        return $this->scaledDPrice;
    }
}
