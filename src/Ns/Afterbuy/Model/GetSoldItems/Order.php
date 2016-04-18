<?php

namespace Ns\Afterbuy\Model\GetSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractOrder;
use \DateTime;

/**
 * Class Order
 */
class Order extends AbstractOrder
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("EbayAccount")
     * @var string
     */
    protected $ebayAccount;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("AmazonAccount")
     * @var string
     */
    protected $amazonAccount;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("Anr")
     * @var float
     */
    protected $anr;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("AlternativeItemNumber1")
     * @var string
     */
    protected $alternativeItemNumber1;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("TrackingLink")
     * @var string
     */
    protected $trackingLink;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Memo")
     * @var string
     */
    protected $memo;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FeedbackLink")
     * @var string
     */
    protected $feedbackLink;

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s', 'UTC', '!d.m.Y'>")
     * @Serializer\SerializedName("OrderDate")
     * @var DateTime
     */
    protected $orderDate;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("OrderIDAlt")
     * @var string
     */
    protected $orderIdAlt;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetSoldItems\PaymentInfo")
     * @Serializer\SerializedName("PaymentInfo")
     * @var PaymentInfo
     */
    protected $paymentInfo;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetSoldItems\BuyerInfo")
     * @Serializer\SerializedName("BuyerInfo")
     * @var BuyerInfo
     */
    protected $buyerInfo;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetSoldItems\ShippingInfo")
     * @Serializer\SerializedName("ShippingInfo")
     * @var ShippingInfo
     */
    protected $shippingInfo;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetSoldItems\SoldItem>")
     * @Serializer\XmlList(entry="SoldItem")
     * @Serializer\SerializedName("SoldItems")
     * @var SoldItem[]
     */
    protected $soldItems;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetSoldItems\VorgangsInfo")
     * @Serializer\SerializedName("VorgangsInfo")
     * @var VorgangsInfo
     */
    protected $vorgangsInfo;

    /**
     * @return string
     */
    public function getEbayAccount()
    {
        return $this->ebayAccount;
    }

    /**
     * @return string
     */
    public function getAmazonAccount()
    {
        return $this->amazonAccount;
    }

    /**
     * @return float
     */
    public function getAnr()
    {
        return $this->anr;
    }

    /**
     * @return string
     */
    public function getAlternativeItemNumber1()
    {
        return $this->alternativeItemNumber1;
    }

    /**
     * @return string
     */
    public function getTrackingLink()
    {
        return $this->trackingLink;
    }

    /**
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * @return string
     */
    public function getFeedbackLink()
    {
        return $this->feedbackLink;
    }

    /**
     * @return DateTime
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @return string
     */
    public function getOrderIdAlt()
    {
        return $this->orderIdAlt;
    }

    /**
     * @return PaymentInfo
     */
    public function getPaymentInfo()
    {
        return $this->paymentInfo;
    }

    /**
     * @return BuyerInfo
     */
    public function getBuyerInfo()
    {
        return $this->buyerInfo;
    }

    /**
     * @return ShippingInfo
     */
    public function getShippingInfo()
    {
        return $this->shippingInfo;
    }

    /**
     * @return SoldItem[]
     */
    public function getSoldItems()
    {
        return $this->soldItems;
    }

    /**
     * @return VorgangsInfo
     */
    public function getVorgangsInfo()
    {
        return $this->vorgangsInfo;
    }
}
