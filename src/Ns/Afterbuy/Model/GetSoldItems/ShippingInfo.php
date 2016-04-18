<?php

namespace Ns\Afterbuy\Model\GetSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractShippingInfo;

/**
 * Class ShippingInfo
 */
class ShippingInfo extends AbstractShippingInfo
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ShippingAdditionalCost")
     * @var float
     */
    protected $shippingAdditionalCost;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ShippingTotalCost")
     * @var float
     */
    protected $shippingTotalCost;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ShippingTaxRate")
     * @var float
     */
    protected $shippingTaxRate;

    /**
     * @return float
     */
    public function getShippingAdditionalCost()
    {
        return $this->shippingAdditionalCost;
    }

    /**
     * @return float
     */
    public function getShippingTotalCost()
    {
        return $this->shippingTotalCost;
    }

    /**
     * @return float
     */
    public function getShippingTaxRate()
    {
        return $this->shippingTaxRate;
    }
}
