<?php

namespace Ns\Afterbuy\Model;

use JMS\Serializer\Annotation as Serializer;
use \DateTime;

/**
 * Class AbstractShippingInfo
 */
abstract class AbstractShippingInfo extends AbstractModel
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ShippingMethod")
     * @var string
     */
    protected $shippingMethod;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ShippingCost")
     * @var float
     */
    protected $shippingCost;

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s', 'UTC', '!d.m.Y'>")
     * @Serializer\SerializedName("DeliveryDate")
     * @var DateTime
     */
    protected $deliveryDate;

    /**
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod;
    }

    /**
     * @return float
     */
    public function getShippingCost()
    {
        return $this->shippingCost;
    }

    /**
     * @return DateTime
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }
}
