<?php

namespace Ns\Afterbuy\Model\UpdateSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

/**
 * Class BuyerInfo
 */
class BuyerInfo extends AbstractModel
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\UpdateSoldItems\ShippingAddress")
     * @Serializer\SerializedName("ShippingAddress")
     * @var ShippingAddress
     */
    protected $shippingAddress;

    /**
     * @return ShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @param ShippingAddress $shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress(ShippingAddress $shippingAddress = null)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }
}
