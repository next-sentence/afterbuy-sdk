<?php

namespace Ns\Afterbuy\Model\GetShopProducts;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;
use Ns\Afterbuy\Model\FloatType;

/**
 * Class Product
 */
class Product extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ProductShopOption")
     * @var int
     */
    protected $productShopOption;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ProductID")
     * @var int
     */
    protected $productId;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("Anr")
     * @var FloatType
     */
    protected $anr;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("EAN")
     * @var string
     */
    protected $ean;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Name")
     * @var string
     */
    protected $name;

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s'>")
     * @Serializer\SerializedName("ModDate")
     * @var \DateTime
     */
    protected $modDate;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("VariationName")
     * @var string
     */
    protected $variationName;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("BaseProductFlag")
     * @var int
     */
    protected $baseProductFlag;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("BaseProductShowMode")
     * @var int
     */
    protected $baseProductShowMode;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetShopProducts\BaseProduct>")
     * @Serializer\XmlList(entry="BaseProduct")
     * @Serializer\SerializedName("BaseProducts")
     * @var BaseProduct[]
     */
    protected $baseProducts;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ShortDescription")
     * @var string
     */
    protected $shortDescription;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Memo")
     * @var string
     */
    protected $memo;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("GoogleBaseLabels")
     * @var string
     */
    protected $googleBaseLabels;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Description")
     * @var string
     */
    protected $description;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Keywords")
     * @var string
     */
    protected $keywords;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("AvailableShop")
     * @var integer
     */
    protected $availableShop;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Quantity")
     * @var integer
     */
    protected $quantity;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("AuctionQuantity")
     * @var int
     */
    protected $auctionQuantity;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("Stock")
     * @var bool
     */
    protected $stock;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("Discontinued")
     * @var bool
     */
    protected $discontinued;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("MergeStock")
     * @var bool
     */
    protected $mergeStock;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("UnitOfQuantity")
     * @var FloatType
     */
    protected $unitOfQuantity;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("BasepriceFactor")
     * @var string
     */
    protected $basepriceFactor;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("MinimumStock")
     * @var int
     */
    protected $minimumStock;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("MinimumOrderQuantity")
     * @var integer
     */
    protected $minimumOrderQuantity;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("FullFilmentQuantity")
     * @var integer
     */
    protected $fullFilmentQuantity;

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s'>")
     * @Serializer\SerializedName("FullFilmentImport")
     * @var \DateTime
     */
    protected $fullFilmentImport;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("SellingPrice")
     * @var FloatType
     */
    protected $sellingPrice;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("BuyingPrice")
     * @var FloatType
     */
    protected $buyingPrice;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("DealerPrice")
     * @var FloatType
     */
    protected $dealerPrice;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Level")
     * @var int
     */
    protected $level;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Position")
     * @var int
     */
    protected $position;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("TitleReplace")
     * @var bool
     */
    protected $titleReplace;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetShopProducts\ScaledDiscount>")
     * @Serializer\XmlList(entry="ScaledDiscount")
     * @Serializer\SerializedName("ScaledDiscounts")
     * @var ScaledDiscount[]
     */
    protected $scaledDiscounts;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("TaxRate")
     * @var FloatType
     */
    protected $taxRate;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("Weight")
     * @var FloatType
     */
    protected $weight;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("SearchAlias")
     * @var string
     */
    protected $searchAlias;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Froogle")
     * @var int
     */
    protected $froogle;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("GoogleBaseShipping")
     * @var string
     */
    protected $googleBaseShipping;
    /**
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("Kelkoo")
     * @var bool
     */
    protected $kelkoo;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ShippingGroup")
     * @var string
     */
    protected $shippingGroup;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ShopShippingGroup")
     * @var string
     */
    protected $shopShippingGroup;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("SearchEngineShipping")
     * @var string
     */
    protected $searchEngineShipping;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("CrossCatalogID")
     * @var int
     */
    protected $crossCatalogId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FreeValue1")
     * @var string
     */
    protected $freeValue1;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FreeValue2")
     * @var string
     */
    protected $freeValue2;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FreeValue3")
     * @var string
     */
    protected $freeValue3;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FreeValue4")
     * @var string
     */
    protected $freeValue4;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FreeValue5")
     * @var string
     */
    protected $freeValue5;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FreeValue6")
     * @var string
     */
    protected $freeValue6;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FreeValue7")
     * @var string
     */
    protected $freeValue7;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FreeValue8")
     * @var string
     */
    protected $freeValue8;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FreeValue9")
     * @var string
     */
    protected $freeValue9;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FreeValue10")
     * @var string
     */
    protected $freeValue10;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Stocklocation_1")
     * @var string
     */
    protected $stockLocation1;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Stocklocation_2")
     * @var string
     */
    protected $stockLocation2;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Stocklocation_3")
     * @var string
     */
    protected $stockLocation3;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Stocklocation_4")
     * @var string
     */
    protected $stockLocation4;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("DeliveryTime")
     * @var string
     */
    protected $deliveryTime;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ImageSmallURL")
     * @var string
     */
    protected $imageSmallURL;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ImageLargeURL")
     * @var string
     */
    protected $imageLargeURL;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("AmazonStandardProductIDType")
     * @var string
     */
    protected $amazonStandardProductIDType;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("AmazonStandardProductIDValue")
     * @var int
     */
    protected $amazonStandardProductIDValue;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ManufacturerStandardProductIDType")
     * @var string
     */
    protected $manufacturerStandardProductIDType;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ManufacturerStandardProductIDValue")
     * @var int
     */
    protected $ManufacturerStandardProductIDValue;

    /**
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("Skus")
     * @Serializer\XmlList(entry="Sku")
     * @var array
     */
    protected $skus;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ProductBrand")
     * @var string
     */
    protected $productBrand;

    /**
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("Catalogs")
     * @Serializer\XmlList(entry="CatalogID")
     * @var array
     */
    protected $catalogs;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Facebook")
     * @var int
     */
    protected $facebook;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ManufacturerPartNumber")
     * @var string
     */
    protected $manufacturerPartNumber;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Condition")
     * @var int
     */
    protected $condition;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("AgeGroup")
     * @var int
     */
    protected $ageGroup;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Material")
     * @var int
     */
    protected $gender;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Material")
     * @var string
     */
    protected $material;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Pattern")
     * @var string
     */
    protected $pattern;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CustomLabel10")
     * @var string
     */
    protected $customLabel10;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CustomLabel11")
     * @var string
     */
    protected $customLabel11;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CustomLabel12")
     * @var string
     */
    protected $customLabel12;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CustomLabel13")
     * @var string
     */
    protected $customLabel13;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CustomLabel14")
     * @var string
     */
    protected $customLabel14;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetShopProducts\ProductPicture>")
     * @Serializer\SerializedName("ProductPictures")
     * @Serializer\XmlList(entry="ProductPicture")
     * @var ProductPicture[]
     */
    protected $productPictures;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetShopProducts\Attribute>")
     * @Serializer\SerializedName("Attributes")
     * @Serializer\XmlList(entry="Attribut")
     * @var Attribute[]
     */
    protected $attributes;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetShopProducts\PartsFitment>")
     * @Serializer\SerializedName("PartsFitment")
     * @var PartsFitment
     */
    protected $partsFitment;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetShopProducts\Feature>")
     * @Serializer\SerializedName("Features")
     * @Serializer\XmlList(entry="Feature")
     * @var Feature[]
     */
    protected $features;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetShopProducts\AdditionalDescriptionField>")
     * @Serializer\SerializedName("AdditionalDescriptionFields")
     * @Serializer\XmlList(entry="AdditionalDescriptionField")
     * @var AdditionalDescriptionField[]
     */
    protected $additionalDescriptionFields;

    /**
     * @return int
     */
    public function getProductShopOption()
    {
        return $this->productShopOption;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @return float
     */
    public function getAnr()
    {
        return $this->anr->getValue();
    }

    /**
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return \DateTime
     */
    public function getModDate()
    {
        return $this->modDate;
    }

    /**
     * @return string
     */
    public function getVariationName()
    {
        return $this->variationName;
    }

    /**
     * @return int
     */
    public function getBaseProductFlag()
    {
        return $this->baseProductFlag;
    }

    /**
     * @return int
     */
    public function getBaseProductShowMode()
    {
        return $this->baseProductShowMode;
    }

    /**
     * @return BaseProduct[]
     */
    public function getBaseProducts()
    {
        return $this->baseProducts;
    }

    /**
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
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
    public function getGoogleBaseLabels()
    {
        return $this->googleBaseLabels;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @return int
     */
    public function getAvailableShop()
    {
        return $this->availableShop;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return int
     */
    public function getAuctionQuantity()
    {
        return $this->auctionQuantity;
    }

    /**
     * @return boolean
     */
    public function isStock()
    {
        return $this->stock;
    }

    /**
     * @return boolean
     */
    public function isDiscontinued()
    {
        return $this->discontinued;
    }

    /**
     * @return boolean
     */
    public function isMergeStock()
    {
        return $this->mergeStock;
    }

    /**
     * @return float
     */
    public function getUnitOfQuantity()
    {
        return $this->unitOfQuantity->getValue();
    }

    /**
     * @return string
     */
    public function getBasepriceFactor()
    {
        return $this->basepriceFactor;
    }

    /**
     * @return int
     */
    public function getMinimumStock()
    {
        return $this->minimumStock;
    }

    /**
     * @return int
     */
    public function getMinimumOrderQuantity()
    {
        return $this->minimumOrderQuantity;
    }

    /**
     * @return int
     */
    public function getFullFilmentQuantity()
    {
        return $this->fullFilmentQuantity;
    }

    /**
     * @return \DateTime
     */
    public function getFullFilmentImport()
    {
        return $this->fullFilmentImport;
    }

    /**
     * @return float
     */
    public function getSellingPrice()
    {
        return $this->sellingPrice->getValue();
    }

    /**
     * @return float
     */
    public function getBuyingPrice()
    {
        return $this->buyingPrice->getValue();
    }

    /**
     * @return float
     */
    public function getDealerPrice()
    {
        return $this->dealerPrice->getValue();
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return boolean
     */
    public function isTitleReplace()
    {
        return $this->titleReplace;
    }

    /**
     * @return ScaledDiscount[]
     */
    public function getScaledDiscounts()
    {
        return $this->scaledDiscounts;
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
    public function getWeight()
    {
        return $this->weight->getValue();
    }

    /**
     * @return string
     */
    public function getSearchAlias()
    {
        return $this->searchAlias;
    }

    /**
     * @return int
     */
    public function getFroogle()
    {
        return $this->froogle;
    }

    /**
     * @return string
     */
    public function getGoogleBaseShipping()
    {
        return $this->googleBaseShipping;
    }

    /**
     * @return boolean
     */
    public function isKelkoo()
    {
        return $this->kelkoo;
    }

    /**
     * @return string
     */
    public function getShippingGroup()
    {
        return $this->shippingGroup;
    }

    /**
     * @return string
     */
    public function getShopShippingGroup()
    {
        return $this->shopShippingGroup;
    }

    /**
     * @return string
     */
    public function getSearchEngineShipping()
    {
        return $this->searchEngineShipping;
    }

    /**
     * @return int
     */
    public function getCrossCatalogId()
    {
        return $this->crossCatalogId;
    }

    /**
     * @return string
     */
    public function getFreeValue1()
    {
        return $this->freeValue1;
    }

    /**
     * @return string
     */
    public function getFreeValue2()
    {
        return $this->freeValue2;
    }

    /**
     * @return string
     */
    public function getFreeValue3()
    {
        return $this->freeValue3;
    }

    /**
     * @return string
     */
    public function getFreeValue4()
    {
        return $this->freeValue4;
    }

    /**
     * @return string
     */
    public function getFreeValue5()
    {
        return $this->freeValue5;
    }

    /**
     * @return string
     */
    public function getFreeValue6()
    {
        return $this->freeValue6;
    }

    /**
     * @return string
     */
    public function getFreeValue7()
    {
        return $this->freeValue7;
    }

    /**
     * @return string
     */
    public function getFreeValue8()
    {
        return $this->freeValue8;
    }

    /**
     * @return string
     */
    public function getFreeValue9()
    {
        return $this->freeValue9;
    }

    /**
     * @return string
     */
    public function getFreeValue10()
    {
        return $this->freeValue10;
    }

    /**
     * @return string
     */
    public function getStockLocation1()
    {
        return $this->stockLocation1;
    }

    /**
     * @return string
     */
    public function getStockLocation2()
    {
        return $this->stockLocation2;
    }

    /**
     * @return string
     */
    public function getStockLocation3()
    {
        return $this->stockLocation3;
    }

    /**
     * @return string
     */
    public function getStockLocation4()
    {
        return $this->stockLocation4;
    }

    /**
     * @return string
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * @return string
     */
    public function getImageSmallURL()
    {
        return $this->imageSmallURL;
    }

    /**
     * @return string
     */
    public function getImageLargeURL()
    {
        return $this->imageLargeURL;
    }

    /**
     * @return string
     */
    public function getAmazonStandardProductIDType()
    {
        return $this->amazonStandardProductIDType;
    }

    /**
     * @return int
     */
    public function getAmazonStandardProductIDValue()
    {
        return $this->amazonStandardProductIDValue;
    }

    /**
     * @return string
     */
    public function getManufacturerStandardProductIDType()
    {
        return $this->manufacturerStandardProductIDType;
    }

    /**
     * @return int
     */
    public function getManufacturerStandardProductIDValue()
    {
        return $this->ManufacturerStandardProductIDValue;
    }

    /**
     * @return array
     */
    public function getSkus()
    {
        return $this->skus;
    }

    /**
     * @return string
     */
    public function getProductBrand()
    {
        return $this->productBrand;
    }

    /**
     * @return array
     */
    public function getCatalogs()
    {
        return $this->catalogs;
    }

    /**
     * @return int
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * @return string
     */
    public function getManufacturerPartNumber()
    {
        return $this->manufacturerPartNumber;
    }

    /**
     * @return int
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @return int
     */
    public function getAgeGroup()
    {
        return $this->ageGroup;
    }

    /**
     * @return int
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return string
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * @return string
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * @return string
     */
    public function getCustomLabel10()
    {
        return $this->customLabel10;
    }

    /**
     * @return string
     */
    public function getCustomLabel11()
    {
        return $this->customLabel11;
    }

    /**
     * @return string
     */
    public function getCustomLabel12()
    {
        return $this->customLabel12;
    }

    /**
     * @return string
     */
    public function getCustomLabel13()
    {
        return $this->customLabel13;
    }

    /**
     * @return string
     */
    public function getCustomLabel14()
    {
        return $this->customLabel14;
    }

    /**
     * @return ProductPicture[]
     */
    public function getProductPictures()
    {
        return $this->productPictures;
    }

    /**
     * @return Attribute[]
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return PartsFitment
     */
    public function getPartsFitment()
    {
        return $this->partsFitment;
    }

    /**
     * @return Feature[]
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * @return AdditionalDescriptionField[]
     */
    public function getAdditionalDescriptionFields()
    {
        return $this->additionalDescriptionFields;
    }
}
