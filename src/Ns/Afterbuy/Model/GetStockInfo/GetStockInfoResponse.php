<?php

namespace Ns\Afterbuy\Model\GetStockInfo;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractResponse;

/**
 * Class GetPaymentServicesResponse
 *
 * @Serializer\XmlRoot("Afterbuy")
 */
class GetStockInfoResponse extends AbstractResponse
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetStockInfo\Result")
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
