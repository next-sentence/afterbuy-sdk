<?php

namespace Ns\Afterbuy\Model\GetShippingCost;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

/**
 * Class ShippingService
 */
class ShippingService extends AbstractModel
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ShippingServiceName")
     * @var string
     */
    protected $shippingServiceName;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ShippingServicePriority")
     * @var string
     */
    protected $shippingServicePriority;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("SingleShipping")
     * @var string
     */
    protected $singleShipping;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetShippingServices\ShippingMethod>")
     * @Serializer\XmlList(entry="ShippingMethod")
     * @Serializer\SerializedName("ShippingMethods")
     * @var ShippingMethod[]
     */
    protected $shippingMethods;
}
