<?php

namespace Ns\Afterbuy\Model\GetPaymentServices;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractResponse;

/**
 * Class GetPaymentServicesResponse
 *
 * @Serializer\XmlRoot("Afterbuy")
 */
class GetPaymentServicesResponse extends AbstractResponse
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetPaymentServices\Result")
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
