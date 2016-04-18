<?php

namespace Ns\Afterbuy\Model;

use JMS\Serializer\Annotation as Serializer;
use \DateTime;

/**
 * Class AbstractOrder
 */
abstract class AbstractOrder extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("OrderID")
     * @var int
     */
    protected $orderId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("AdditionalInfo")
     * @var string
     */
    protected $additionalInfo;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("UserComment")
     * @var string
     */
    protected $userComment;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("InvoiceMemo")
     * @var string
     */
    protected $invoiceMemo;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("InvoiceNumber")
     * @var int
     */
    protected $invoiceNumber;

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s', 'UTC', '!d.m.Y'>")
     * @Serializer\SerializedName("FeedbackDate")
     * @var DateTime
     */
    protected $feedbackDate;

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * @return string
     */
    public function getUserComment()
    {
        return $this->userComment;
    }

    /**
     * @return string
     */
    public function getInvoiceMemo()
    {
        return $this->invoiceMemo;
    }

    /**
     * @return int
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * @return DateTime
     */
    public function getFeedbackDate()
    {
        return $this->feedbackDate;
    }
}
