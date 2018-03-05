<?php

namespace Ns\Afterbuy\Model\GetShippingCost;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\Result as BaseResult;

/**
 * Class Result
 */
class Result extends BaseResult
{
    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetShippingCost\ShippingService>")
     * @Serializer\SerializedName("ShippingService")
     * @Serializer\XmlList(entry="ShippingService")
     * @var ShippingService
     */
    protected $shippingService;

    /**
     * @return ShippingService
     */
    public function getShippingService()
    {
        return $this->shippingService;
    }
}
