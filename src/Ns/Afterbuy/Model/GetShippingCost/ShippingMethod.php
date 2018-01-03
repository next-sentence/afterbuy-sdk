<?php

namespace Ns\Afterbuy\Model\GetShippingCost;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;
//use Ns\Afterbuy\Model\FloatType;

/**
 * Class ShippingMethod
 */
class ShippingMethod extends AbstractModel
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ShippingCost")
     * @var integer
     */
    protected $shippingCost;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ShippingMethod")
     * @var string
     */
    protected $shippingMethod;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ShippingMethodID")
     * @var string
     */
    protected $shippingMethodId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ShippingMethodDescription")
     * @var string
     */
    protected $shippinMethodDescription;
}
