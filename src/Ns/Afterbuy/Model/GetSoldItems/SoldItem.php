<?php

namespace Ns\Afterbuy\Model\GetSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;
use \DateTime;
use Ns\Afterbuy\Model\FloatType;

/**
 * Class SoldItem
 */
class SoldItem extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\Accessor(setter="setItemDetailsDoneFromInteger")
     * @Serializer\SerializedName("ItemDetailsDone")
     * @var bool
     */
    protected $itemDetailsDone;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ItemID")
     * @var int
     */
    protected $itemId;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("Anr")
     * @var FloatType
     */
    protected $anr;

    /**
     * @Serializer\Type("string")
     * @Serializer\Accessor(setter="setIsAmazonInvoicedFromString")
     * @Serializer\SerializedName("IsAmazonInvoiced")
     * @var bool
     */
    protected $isAmazonInvoiced;
    
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PlatformSpecificOrderId")
     * @var string
     */
    protected $platformSpecificOrderId;
    
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("eBayTransactionID")
     * @var int
     */
    protected $ebayTransactionId;

    /**
     * @Serializer\Type("string")
     * @Serializer\Accessor(setter="setEbayPlusTransactionFromString")
     * @Serializer\SerializedName("eBayPlusTransaction")
     * @var bool
     */
    protected $eBayPlusTransaction;
    
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("AlternativeItemNumber1")
     * @var string
     */
    protected $alternativeItemNumber1;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("AlternativeItemNumber")
     * @var string
     */
    protected $alternativeItemNumber;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("InternalItemType")
     * @var int
     */
    protected $internalItemType;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("UserDefinedFlag")
     * @var int
     */
    protected $userDefinedFlag;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ItemTitle")
     * @var string
     */
    protected $itemTitle;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ItemQuantity")
     * @var int
     */
    protected $itemQuantity;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ItemPrice")
     * @var FloatType
     */
    protected $itemPrice;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetSoldItems\ItemOriginalCurrency")
     * @Serializer\SerializedName("ItemOriginalCurrency")
     * @var ItemOriginalCurrency
     */
    protected $itemOriginalCurrency;

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s', 'UTC', '!d.m.Y'>")
     * @Serializer\SerializedName("ItemEndDate")
     * @var DateTime
     */
    protected $itemEndDate;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("TaxRate")
     * @var FloatType
     */
    protected $taxRate;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ItemWeight")
     * @var FloatType
     */
    protected $itemWeight;

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s', 'UTC', '!d.m.Y'>")
     * @Serializer\SerializedName("ItemXmlDate")
     * @var DateTime
     */
    protected $itemXmlDate;

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s'>")
     * @Serializer\SerializedName("ItemModDate")
     * @var DateTime
     */
    protected $itemModDate;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ItemPlatformName")
     * @var string
     */
    protected $itemPlatformName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ItemLink")
     * @var string
     */
    protected $itemLink;

    /**
     * @Serializer\Type("integer")
     * @Serializer\Accessor(setter="setEbayFeedbackCompletedFromInteger")
     * @Serializer\SerializedName("eBayFeedbackCompleted")
     * @var bool
     */
    protected $ebayFeedbackCompleted;

    /**
     * @Serializer\Type("integer")
     * @Serializer\Accessor(setter="setEbayFeedbackReceivedFromInteger")
     * @Serializer\SerializedName("eBayFeedbackReceived")
     * @var bool
     */
    protected $ebayFeedbackReceived;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("eBayFeedbackCommentType")
     * @var string
     */
    protected $ebayFeedbackCommentType;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetSoldItems\ShopProductDetails")
     * @Serializer\SerializedName("ShopProductDetails")
     * @var ShopProductDetails
     */
    protected $shopProductDetails;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetSoldItems\SoldItemAttribute>")
     * @Serializer\XmlList(entry="SoldItemAttribute")
     * @Serializer\SerializedName("SoldItemAttributes")
     * @var SoldItemAttribute[]
     */
    protected $soldItemAttributes;

    /**
     * @Serializer\Type("array<string>")
     * @Serializer\XmlList(entry="Tag")
     * @Serializer\SerializedName("Tags")
     * @var array
     */
    protected $tags;

    /**
     * @param int $value
     */
    public function setItemDetailsDoneFromInteger($value)
    {
        $this->itemDetailsDone = $this->setBooleanFromInteger($value);
    }

    /**
     * @param int $value
     */
    public function setEbayFeedbackCompletedFromInteger($value)
    {
        $this->ebayFeedbackCompleted = $this->setBooleanFromInteger($value);
    }

    /**
     * @param int $value
     */
    public function setEbayFeedbackReceivedFromInteger($value)
    {
        $this->ebayFeedbackReceived = $this->setBooleanFromInteger($value);
    }

    /**
     * @param string $value
     */
    public function setIsAmazonInvoicedFromString($value)
    {
        $this->isAmazonInvoiced = $this->setBooleanFromString($value);
    }

    /**
     * @param string $value
     */
    public function setEbayPlusTransactionFromString($value)
    {
        $this->eBayPlusTransaction = $this->setBooleanFromString($value);
    }

    /**
     * @return boolean
     */
    public function isItemDetailsDone()
    {
        return $this->itemDetailsDone;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @return float
     */
    public function getAnr()
    {
        return $this->anr->getValue();
    }

    /**
     * @return bool
     */
    public function isAmazonInvoiced(): bool
    {
        return $this->isAmazonInvoiced;
    }

    /**
     * @return string
     */
    public function getPlatformSpecificOrderId(): string
    {
        return $this->platformSpecificOrderId;
    }

    /**
     * @return int
     */
    public function getEbayTransactionId()
    {
        return $this->ebayTransactionId;
    }

    /**
     * @return bool
     */
    public function isEbayPlusTransaction(): bool
    {
        return $this->eBayPlusTransaction;
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
    public function getAlternativeItemNumber()
    {
        return $this->alternativeItemNumber;
    }

    /**
     * @return int
     */
    public function getInternalItemType()
    {
        return $this->internalItemType;
    }

    /**
     * @return int
     */
    public function getUserDefinedFlag()
    {
        return $this->userDefinedFlag;
    }

    /**
     * @return string
     */
    public function getItemTitle()
    {
        return $this->itemTitle;
    }

    /**
     * @return int
     */
    public function getItemQuantity()
    {
        return $this->itemQuantity;
    }

    /**
     * @return float
     */
    public function getItemPrice()
    {
        return $this->itemPrice->getValue();
    }

    /**
     * @return DateTime
     */
    public function getItemEndDate()
    {
        return $this->itemEndDate;
    }

    /**
     * @return float
     */
    public function getTaxRate()
    {
        return $this->taxRate->getValue();
    }

    /**
     * @return float
     */
    public function getItemWeight()
    {
        return $this->itemWeight->getValue();
    }

    /**
     * @return DateTime
     */
    public function getItemXmlDate()
    {
        return $this->itemXmlDate;
    }

    /**
     * @return DateTime
     */
    public function getItemModDate()
    {
        return $this->itemModDate;
    }

    /**
     * @return string
     */
    public function getItemPlatformName()
    {
        return $this->itemPlatformName;
    }

    /**
     * @return string
     */
    public function getItemLink()
    {
        return $this->itemLink;
    }

    /**
     * @return boolean
     */
    public function isEbayFeedbackCompleted()
    {
        return $this->ebayFeedbackCompleted;
    }

    /**
     * @return boolean
     */
    public function isEbayFeedbackReceived()
    {
        return $this->ebayFeedbackReceived;
    }

    /**
     * @return string
     */
    public function getEbayFeedbackCommentType()
    {
        return $this->ebayFeedbackCommentType;
    }

    /**
     * @return ShopProductDetails
     */
    public function getShopProductDetails()
    {
        return $this->shopProductDetails;
    }

    /**
     * @return ItemOriginalCurrency
     */
    public function getItemOriginalCurrency()
    {
        return $this->itemOriginalCurrency;
    }

    /**
     * @return SoldItemAttribute[]
     */
    public function getSoldItemAttributes()
    {
        return $this->soldItemAttributes;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }
}
