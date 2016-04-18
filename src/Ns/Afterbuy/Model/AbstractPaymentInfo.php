<?php

namespace Ns\Afterbuy\Model;

use JMS\Serializer\Annotation as Serializer;
use \DateTime;

/**
 * Class AbstractPaymentInfo
 */
abstract class AbstractPaymentInfo extends AbstractModel
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PaymentMethod")
     * @var string
     */
    protected $paymentMethod;

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s', 'UTC', '!d.m.Y'>")
     * @Serializer\SerializedName("PaymentDate")
     * @var DateTime
     */
    protected $paymentDate;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("AlreadyPaid")
     * @var FloatType
     */
    protected $alreadyPaid;

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @return DateTime
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * @return FloatType
     */
    public function getAlreadyPaid()
    {
        return $this->alreadyPaid;
    }
}
