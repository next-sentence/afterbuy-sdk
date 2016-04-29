<?php

namespace Ns\Afterbuy\Model\GetSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractPaymentInfo;
use \DateTime;
use Ns\Afterbuy\Model\FloatType;

/**
 * Class PaymentInfo
 */
class PaymentInfo extends AbstractPaymentInfo
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PaymentID")
     * @var string
     */
    protected $paymentId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PaymentFunction")
     * @var string
     */
    protected $paymentFunction;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetSoldItems\PaymentData")
     * @Serializer\SerializedName("PaymentData")
     * @var PaymentData
     */
    protected $paymentData;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PaymentTransactionID")
     * @var string
     */
    protected $paymentTransactionId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PaymentStatus")
     * @var string
     */
    protected $paymentStatus;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("FullAmount")
     * @var FloatType
     */
    protected $fullAmount;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PaymentInstruction")
     * @var string
     */
    protected $paymentInstruction;

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s', 'UTC', '!d.m.Y'>")
     * @Serializer\SerializedName("InvoiceDate")
     * @var DateTime
     */
    protected $invoiceDate;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("EFTID")
     * @var string
     */
    protected $eftid;

    /**
     * @return string
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @return string
     */
    public function getPaymentFunction()
    {
        return $this->paymentFunction;
    }

    /**
     * @return PaymentData
     */
    public function getPaymentData()
    {
        return $this->paymentData;
    }

    /**
     * @return string
     */
    public function getPaymentTransactionId()
    {
        return $this->paymentTransactionId;
    }

    /**
     * @return string
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * @return float
     */
    public function getFullAmount()
    {
        return $this->fullAmount->getValue();
    }

    /**
     * @return string
     */
    public function getPaymentInstruction()
    {
        return $this->paymentInstruction;
    }

    /**
     * @return DateTime
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * @return string
     */
    public function getEftid()
    {
        return $this->eftid;
    }
}
