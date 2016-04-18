<?php

namespace Ns\Afterbuy\Model\GetPaymentServices;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\Result as BaseResult;

/**
 * Class Result
 */
class Result extends BaseResult
{
    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetPaymentServices\PaymentService>")
     * @Serializer\SerializedName("PaymentServices")
     * @Serializer\XmlList(entry="PaymentService")
     * @var PaymentService[]
     */
    protected $paymentServices;

    /**
     * @return PaymentService[]
     */
    public function getPaymentServices()
    {
        return $this->paymentServices;
    }
}
