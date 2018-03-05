<?php

namespace Ns\Afterbuy\Model\GetAfterbuyTime;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractResponse;

/**
 * Class GetPaymentServicesResponse
 *
 * @Serializer\XmlRoot("Afterbuy")
 */
class GetAfterbuyTimeResponse extends AbstractResponse
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetAfterbuyTime\Result")
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
