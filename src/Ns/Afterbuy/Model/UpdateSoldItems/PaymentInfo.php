<?php

namespace Ns\Afterbuy\Model\UpdateSoldItems;

use JMS\Serializer\Annotation as Serializer;
use \DateTime;
use Ns\Afterbuy\Model\AbstractPaymentInfo;
use Ns\Afterbuy\Model\FloatType;

/**
 * Class PaymentInfo
 */
class PaymentInfo extends AbstractPaymentInfo
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("PaymentAadditionalCost")
     * @var FloatType
     */
    protected $paymentAdditionalCost;

    /**
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getSendPaymentMailAsInteger", setter="setSendPaymentMailFromInteger")
     * @Serializer\SerializedName("SendPaymentMail")
     * @var bool
     */
    protected $sendPaymentMail;

    /**
     * @return int
     */
    public function getSendPaymentMailAsInteger()
    {
        return $this->getBooleanAsInteger($this->sendPaymentMail);
    }

    /**
     * @param int $value
     */
    public function setSendPaymentMailFromInteger($value)
    {
        $this->sendPaymentMail = $this->setBooleanFromInteger($value);
    }

    /**
     * @param string $paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * @param DateTime $paymentDate
     *
     * @return $this
     */
    public function setPaymentDate(DateTime $paymentDate = null)
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }

    /**
     * @param Float $alreadyPaid
     *
     * @return $this
     */
    public function setAlreadyPaid($alreadyPaid)
    {
        $this->alreadyPaid = $alreadyPaid;

        return $this;
    }

    /**
     * @return float
     */
    public function getPaymentAdditionalCost()
    {
        return $this->paymentAdditionalCost->getValue();
    }

    /**
     * @param float $paymentAdditionalCost
     *
     * @return $this
     */
    public function setPaymentAdditionalCost($paymentAdditionalCost)
    {
        $this->paymentAdditionalCost = new FloatType($paymentAdditionalCost);

        return $this;
    }

    /**
     * @return bool
     */
    public function isSendPaymentMail()
    {
        return $this->sendPaymentMail;
    }

    /**
     * @param bool $sendPaymentMail
     *
     * @return $this
     */
    public function setSendPaymentMail($sendPaymentMail)
    {
        $this->sendPaymentMail = $sendPaymentMail;

        return $this;
    }
}
