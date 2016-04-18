<?php

namespace Ns\Afterbuy\Model\GetShippingServices;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractResponse;

/**
 * Class GetShippingServicesResponse
 *
 * @Serializer\XmlRoot("Afterbuy")
 */
class GetShippingServicesResponse extends AbstractResponse
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetShippingServices\Result")
     * @Serializer\SerializedName("Result")
     * @var Result
     */
    protected $result;

    /**
     * @return Result
     */
    public function getResult()
    {
        return $this->result;
    }
}
