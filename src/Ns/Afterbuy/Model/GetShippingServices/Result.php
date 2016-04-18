<?php

namespace Ns\Afterbuy\Model\GetShippingServices;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\Result as BaseResult;

/**
 * Class Result
 */
class Result extends BaseResult
{
    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetShippingServices\ShippingService>")
     * @Serializer\SerializedName("ShippingServices")
     * @Serializer\XmlList(entry="ShippingService")
     * @var ShippingService[]
     */
    protected $shippingServices;

    /**
     * @return ShippingService[]
     */
    public function getShippingServices()
    {
        return $this->shippingServices;
    }
}
