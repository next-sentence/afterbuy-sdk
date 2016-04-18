<?php

namespace Ns\Afterbuy\Model\GetSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

/**
 * Class BuyerInfo
 */
class BuyerInfo extends AbstractModel
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetSoldItems\BillingAddress")
     * @Serializer\SerializedName("BillingAddress")
     * @var BillingAddress
     */
    protected $billingAddress;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetSoldItems\ShippingAddress")
     * @Serializer\SerializedName("ShippingAddress")
     * @var ShippingAddress
     */
    protected $shippingAddress;

    /**
     * @return BillingAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @return ShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }
}
