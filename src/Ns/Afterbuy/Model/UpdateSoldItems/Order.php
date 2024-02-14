<?php

namespace Ns\Afterbuy\Model\UpdateSoldItems;

use JMS\Serializer\Annotation as Serializer;
use \DateTime;
use Ns\Afterbuy\Model\AbstractOrder;

/**
 * Class Order
 */
class Order extends AbstractOrder
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ItemID")
     * @var int
     */
    protected $itemId;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("UserDefinedFlag")
     * @var int
     */
    protected $userDefinedFlag;

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s'>")
     * @Serializer\SerializedName("MailDate")
     * @var DateTime
     */
    protected $mailDate;

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s'>")
     * @Serializer\SerializedName("ReminderMailDate")
     * @var DateTime
     */
    protected $reminderMailDate;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("OrderMemo")
     * @var string
     */
    protected $orderMemo;

    /**
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getOrderExportedAsInteger", setter="setOrderExportedFromInteger")
     * @Serializer\SerializedName("OrderExported")
     * @var bool
     */
    protected $orderExported;

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s'>")
     * @Serializer\SerializedName("InvoiceDate")
     * @var DateTime
     */
    protected $invoiceDate;

    /**
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getHideOrderAsInteger", setter="setHideOrderFromInteger")
     * @Serializer\SerializedName("HideOrder")
     * @var bool
     */
    protected $hideOrder;

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s'>")
     * @Serializer\SerializedName("Reminder1Date")
     * @var DateTime
     */
    protected $reminder1Date;

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s'>")
     * @Serializer\SerializedName("Reminder2Date")
     * @var DateTime
     */
    protected $reminder2Date;

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s'>")
     * @Serializer\SerializedName("XmlDate")
     * @var DateTime
     */
    protected $xmlDate;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\UpdateSoldItems\BuyerInfo")
     * @Serializer\SerializedName("BuyerInfo")
     * @var BuyerInfo
     */
    protected $buyerInfo;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\UpdateSoldItems\PaymentInfo")
     * @Serializer\SerializedName("PaymentInfo")
     * @var PaymentInfo
     */
    protected $paymentInfo;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\UpdateSoldItems\ShippingInfo")
     * @Serializer\SerializedName("ShippingInfo")
     * @var ShippingInfo
     */
    protected $shippingInfo;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\UpdateSoldItems\VorgangsInfo")
     * @Serializer\SerializedName("VorgangsInfo")
     * @var VorgangsInfo
     */
    protected $vorgangsInfo;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\UpdateSoldItems\Tags")
     * @Serializer\SerializedName("Tags")
     * @var Tags
     */
    protected $tags;

    /**
     * @return int
     */
    public function getOrderExportedAsInteger()
    {
        return $this->getBooleanAsInteger($this->orderExported);
    }

    /**
     * @param int $value
     */
    public function setOrderExportedFromInteger($value)
    {
        $this->orderExported = $this->setBooleanFromInteger($value);
    }

    /**
     * @return int
     */
    public function getHideOrderAsInteger()
    {
        return $this->getBooleanAsInteger($this->hideOrder);
    }

    /**
     * @param int $value
     */
    public function setHideOrderFromInteger($value)
    {
        $this->hideOrder = $this->setBooleanFromInteger($value);
    }

    /**
     * @param int $orderId
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     *
     * @return $this
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * @return int
     */
    public function getUserDefinedFlag()
    {
        return $this->userDefinedFlag;
    }

    /**
     * @param int $userDefinedFlag
     *
     * @return $this
     */
    public function setUserDefinedFlag($userDefinedFlag)
    {
        $this->userDefinedFlag = $userDefinedFlag;

        return $this;
    }

    /**
     * @param string $additionalInfo
     *
     * @return $this
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getMailDate()
    {
        return $this->mailDate;
    }

    /**
     * @param DateTime $mailDate
     *
     * @return $this
     */
    public function setMailDate(DateTime $mailDate = null)
    {
        $this->mailDate = $mailDate;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getReminderMailDate()
    {
        return $this->reminderMailDate;
    }

    /**
     * @param DateTime $reminderMailDate
     *
     * @return $this
     */
    public function setReminderMailDate(DateTime $reminderMailDate = null)
    {
        $this->reminderMailDate = $reminderMailDate;

        return $this;
    }

    /**
     * @param string $userComment
     *
     * @return $this
     */
    public function setUserComment($userComment)
    {
        $this->userComment = $userComment;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderMemo()
    {
        return $this->orderMemo;
    }

    /**
     * @param string $orderMemo
     *
     * @return $this
     */
    public function setOrderMemo($orderMemo)
    {
        $this->orderMemo = $orderMemo;

        return $this;
    }

    /**
     * @param string $invoiceMemo
     *
     * @return $this
     */
    public function setInvoiceMemo($invoiceMemo)
    {
        $this->invoiceMemo = $invoiceMemo;

        return $this;
    }

    /**
     * @param int $invoiceNumber
     *
     * @return $this
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    /**
     * @return bool
     */
    public function isOrderExported()
    {
        return $this->orderExported;
    }

    /**
     * @param bool $orderExported
     *
     * @return $this
     */
    public function setOrderExported($orderExported)
    {
        $this->orderExported = $orderExported;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * @param DateTime $invoiceDate
     *
     * @return $this
     */
    public function setInvoiceDate(DateTime $invoiceDate = null)
    {
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    /**
     * @return bool
     */
    public function isHideOrder()
    {
        return $this->hideOrder;
    }

    /**
     * @param bool $hideOrder
     *
     * @return $this
     */
    public function setHideOrder($hideOrder)
    {
        $this->hideOrder = $hideOrder;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getReminder1Date()
    {
        return $this->reminder1Date;
    }

    /**
     * @param DateTime $reminder1Date
     *
     * @return $this
     */
    public function setReminder1Date(DateTime $reminder1Date = null)
    {
        $this->reminder1Date = $reminder1Date;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getReminder2Date()
    {
        return $this->reminder2Date;
    }

    /**
     * @param DateTime $reminder2Date
     *
     * @return $this
     */
    public function setReminder2Date(DateTime $reminder2Date = null)
    {
        $this->reminder2Date = $reminder2Date;

        return $this;
    }

    /**
     * @param DateTime $feedbackDate
     *
     * @return $this
     */
    public function setFeedbackDate(DateTime $feedbackDate = null)
    {
        $this->feedbackDate = $feedbackDate;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getXmlDate()
    {
        return $this->xmlDate;
    }

    /**
     * @param DateTime $xmlDate
     *
     * @return $this
     */
    public function setXmlDate(DateTime $xmlDate = null)
    {
        $this->xmlDate = $xmlDate;

        return $this;
    }

    /**
     * @return BuyerInfo
     */
    public function getBuyerInfo()
    {
        return $this->buyerInfo;
    }

    /**
     * @param BuyerInfo $buyerInfo
     *
     * @return $this
     */
    public function setBuyerInfo(BuyerInfo $buyerInfo = null)
    {
        $this->buyerInfo = $buyerInfo;

        return $this;
    }

    /**
     * @return PaymentInfo
     */
    public function getPaymentInfo()
    {
        return $this->paymentInfo;
    }

    /**
     * @param PaymentInfo $paymentInfo
     *
     * @return $this
     */
    public function setPaymentInfo(PaymentInfo $paymentInfo = null)
    {
        $this->paymentInfo = $paymentInfo;

        return $this;
    }

    /**
     * @return ShippingInfo
     */
    public function getShippingInfo()
    {
        return $this->shippingInfo;
    }

    /**
     * @param ShippingInfo $shippingInfo
     *
     * @return $this
     */
    public function setShippingInfo(ShippingInfo $shippingInfo = null)
    {
        $this->shippingInfo = $shippingInfo;

        return $this;
    }

    /**
     * @return VorgangsInfo
     */
    public function getVorgangsInfo()
    {
        return $this->vorgangsInfo;
    }

    /**
     * @param VorgangsInfo $vorgangsInfo
     *
     * @return $this
     */
    public function setVorgangsInfo(VorgangsInfo $vorgangsInfo = null)
    {
        $this->vorgangsInfo = $vorgangsInfo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

}
