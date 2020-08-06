<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;
use Ns\Afterbuy\Model\AbstractScaledDiscount;
use Ns\Afterbuy\Model\FloatType;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class ScaledDiscount
 */
class ScaledDiscount extends AbstractScaledDiscount
{
    /**
     * @param integer $scaledQuantity
     * @return $this
     */
    public function setScaledQuantity($scaledQuantity)
    {
        $this->scaledQuantity = $scaledQuantity;
        return $this;
    }

    /**
     * @param FloatType $scaledPrice
     * @return $this
     */
    public function setScaledPrice($scaledPrice)
    {
        $this->scaledPrice = $scaledPrice;
        return $this;
    }

    /**
     * @param FloatType $scaledDPrice
     * @return $this
     */
    public function setScaledDPrice($scaledDPrice)
    {
        $this->scaledDPrice = $scaledDPrice;
        return $this;
    }

}

