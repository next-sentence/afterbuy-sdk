<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;
use Ns\Afterbuy\Model\FloatType;

/**
 * Class AddCatalog
 */
class Product extends AbstractModel
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\UpdateShopProducts\ProductIdent")
     * @Serializer\SerializedName("ProductIdent")
     * @var ProductIdent
     */
    protected $productIdent;

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
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("FooterID")
     * @var int
     */
    protected $footerId;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("HeaderID")
     * @var int
     */
    protected $headerId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Name")
     * @var string
     */
    protected $name;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ManufacturerPartNumber")
     * @var string
     */
    protected $manufacturerPartNumber;

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
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Stock")
     * @var integer
     */
    protected $stock;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Discontinued")
     * @var int
     */
    protected $discontinued;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("MergeStock")
     * @var int
     */
    protected $mergeStock;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("UnitOfQuantity")
     * @var string
     */
    protected $unitOfQuantity;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("BasepriceFactor")
     * @var FloatType
     */
    protected $basepriceFactor;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("MinimumStock")
     * @var int
     */
    protected $minimumStock;

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
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("TitleReplace")
     * @var int
     */
    protected $titleReplace;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\UpdateShopProducts\ScaledDiscount>")
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
     * @Serializer\SerializedName("CountryOfOrigin")
     * @var string
     */
    protected $countryOfOrigin;

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
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Kelkoo")
     * @var int
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
     * @Serializer\SerializedName("ImageName")
     * @var string
     */
    protected $imageName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ImageSource")
     * @var string
     */
    protected $imageSource;

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
    protected $manufacturerStandardProductIDValue;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ProductBrand")
     * @var string
     */
    protected $productBrand;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CustomsTariffNumber")
     * @var string
     */
    protected $customsTariffNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("GoogleProductCategory")
     * @var string
     */
    protected $googleProductCategory;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Condition")
     * @var int
     */
    protected $condition;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Pattern")
     * @var string
     */
    protected $pattern;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Material")
     * @var string
     */
    protected $material;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ItemColor")
     * @var string
     */
    protected $itemColor;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ItemSize")
     * @var string
     */
    protected $itemSize;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CanonicalUrl")
     * @var string
     */
    protected $canonicalUrl;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("EnergyClass")
     * @var int
     */
    protected $energyClass;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("EnergyClassPictureUrl")
     * @var string
     */
    protected $energyClassPictureUrl;

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
     * @Serializer\Type("Ns\Afterbuy\Model\UpdateShopProducts\Skus")
     * @Serializer\SerializedName("Skus")
     * @var Skus
     */
    protected $skus;

    //TODO: change to array
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\UpdateShopProducts\AddCatalogs")
     * @Serializer\SerializedName("AddCatalogs")
     * @var AddCatalogs
     */
    protected $addCatalogs;

    //TODO: change to array
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\UpdateShopProducts\AddAttributes")
     * @Serializer\SerializedName("AddAttributes")
     * @var AddAttributes
     */
    protected $addAttributes;

    //TODO: change to array
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\UpdateShopProducts\AddBaseProducts")
     * @Serializer\SerializedName("AddBAseProducts")
     * @var AddBaseProducts
     */
    protected $addBaseProducts;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\UpdateShopProducts\Variation>")
     * @Serializer\SerializedName("UseeBayVariations")
     * @Serializer\XmlList(entry="Variation")
     * @var Variation[]
     */
    protected $variations;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\UpdateShopProducts\PartsFitment>")
     * @Serializer\SerializedName("PartsFitment")
     * @Serializer\XmlList(entry="PartsProperties")
     * @var PartsFitment[]
     */
    protected $partsFitments;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\UpdateShopProducts\ProductPicture>")
     * @Serializer\SerializedName("ProductPictures")
     * @Serializer\XmlList(entry="ProductPicture")
     * @var ProductPicture[]
     */
    protected $productPictures;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\UpdateShopProducts\AdditionalDescriptionField>")
     * @Serializer\SerializedName("AdditionalDescriptionFields")
     * @Serializer\XmlList(entry="AdditionalDescriptionField")
     * @var AdditionalDescriptionField[]
     */
    protected $additionalDescriptionFields;

    /**
     * @return ProductIdent
     */
    public function getProductIdent()
    {
        return $this->productIdent;
    }

    /**
     * @param ProductIdent $productIdent
     */
    public function setProductIdent($productIdent)
    {
        $this->productIdent = $productIdent;
    }

    /**
     * @return FloatType
     */
    public function getAnr()
    {
        return $this->anr;
    }

    /**
     * @param FloatType $anr
     */
    public function setAnr($anr)
    {
        $this->anr = $anr;
    }

    /**
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @param string $ean
     */
    public function setEan($ean)
    {
        $this->ean = $ean;
    }

    /**
     * @return int
     */
    public function getFooterId()
    {
        return $this->footerId;
    }

    /**
     * @param int $footerId
     */
    public function setFooterId($footerId)
    {
        $this->footerId = $footerId;
    }

    /**
     * @return int
     */
    public function getHeaderId()
    {
        return $this->headerId;
    }

    /**
     * @param int $headerId
     */
    public function setHeaderId($headerId)
    {
        $this->headerId = $headerId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getManufacturerPartNumber()
    {
        return $this->manufacturerPartNumber;
    }

    /**
     * @param string $manufacturerPartNumber
     */
    public function setManufacturerPartNumber($manufacturerPartNumber)
    {
        $this->manufacturerPartNumber = $manufacturerPartNumber;
    }

    /**
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * @param string $shortDescription
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
    }

    /**
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * @param string $memo
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param string $keywords
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return int
     */
    public function getAuctionQuantity()
    {
        return $this->auctionQuantity;
    }

    /**
     * @param int $auctionQuantity
     */
    public function setAuctionQuantity($auctionQuantity)
    {
        $this->auctionQuantity = $auctionQuantity;
    }

    /**
     * @return boolean
     */
    public function getStock()
    {
        return $this->setBooleanFromInteger($this->stock);
    }

    /**
     * @param boolean $stock
     */
    public function setStock($stock)
    {
        $this->stock = $this->getBooleanAsInteger($stock);
    }

    /**
     * @return int
     */
    public function getDiscontinued()
    {
        return $this->discontinued;
    }

    /**
     * @param int $discontinued
     */
    public function setDiscontinued($discontinued)
    {
        $this->discontinued = $discontinued;
    }

    /**
     * @return int
     */
    public function getMergeStock()
    {
        return $this->mergeStock;
    }

    /**
     * @param int $mergeStock
     */
    public function setMergeStock($mergeStock)
    {
        $this->mergeStock = $mergeStock;
    }

    /**
     * @return string
     */
    public function getUnitOfQuantity()
    {
        return $this->unitOfQuantity;
    }

    /**
     * @param string $unitOfQuantity
     */
    public function setUnitOfQuantity($unitOfQuantity)
    {
        $this->unitOfQuantity = $unitOfQuantity;
    }

    /**
     * @return FloatType
     */
    public function getBasepriceFactor()
    {
        return $this->basepriceFactor;
    }

    /**
     * @param FloatType $basepriceFactor
     */
    public function setBasepriceFactor($basepriceFactor)
    {
        $this->basepriceFactor = $basepriceFactor;
    }

    /**
     * @return int
     */
    public function getMinimumStock()
    {
        return $this->minimumStock;
    }

    /**
     * @param int $minimumStock
     */
    public function setMinimumStock($minimumStock)
    {
        $this->minimumStock = $minimumStock;
    }

    /**
     * @return FloatType
     */
    public function getSellingPrice()
    {
        return $this->sellingPrice;
    }

    /**
     * @param FloatType $sellingPrice
     */
    public function setSellingPrice($sellingPrice)
    {
        $this->sellingPrice = $sellingPrice;
    }

    /**
     * @return FloatType
     */
    public function getBuyingPrice()
    {
        return $this->buyingPrice;
    }

    /**
     * @param FloatType $buyingPrice
     */
    public function setBuyingPrice($buyingPrice)
    {
        $this->buyingPrice = $buyingPrice;
    }

    /**
     * @return FloatType
     */
    public function getDealerPrice()
    {
        return $this->dealerPrice;
    }

    /**
     * @param FloatType $dealerPrice
     */
    public function setDealerPrice($dealerPrice)
    {
        $this->dealerPrice = $dealerPrice;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return int
     */
    public function getTitleReplace()
    {
        return $this->titleReplace;
    }

    /**
     * @param int $titleReplace
     */
    public function setTitleReplace($titleReplace)
    {
        $this->titleReplace = $titleReplace;
    }

    /**
     * @return ScaledDiscount[]
     */
    public function getScaledDiscounts()
    {
        return $this->scaledDiscounts;
    }

    /**
     * @param ScaledDiscount[] $scaledDiscounts
     */
    public function setScaledDiscounts($scaledDiscounts)
    {
        $this->scaledDiscounts = $scaledDiscounts;
    }

    /**
     * @return FloatType
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * @param FloatType $taxRate
     */
    public function setTaxRate($taxRate)
    {
        $this->taxRate = $taxRate;
    }

    /**
     * @return FloatType
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param FloatType $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getStockLocation1()
    {
        return $this->stockLocation1;
    }

    /**
     * @param string $stockLocation1
     */
    public function setStockLocation1($stockLocation1)
    {
        $this->stockLocation1 = $stockLocation1;
    }

    /**
     * @return string
     */
    public function getStockLocation2()
    {
        return $this->stockLocation2;
    }

    /**
     * @param string $stockLocation2
     */
    public function setStockLocation2($stockLocation2)
    {
        $this->stockLocation2 = $stockLocation2;
    }

    /**
     * @return string
     */
    public function getStockLocation3()
    {
        return $this->stockLocation3;
    }

    /**
     * @param string $stockLocation3
     */
    public function setStockLocation3($stockLocation3)
    {
        $this->stockLocation3 = $stockLocation3;
    }

    /**
     * @return string
     */
    public function getStockLocation4()
    {
        return $this->stockLocation4;
    }

    /**
     * @param string $stockLocation4
     */
    public function setStockLocation4($stockLocation4)
    {
        $this->stockLocation4 = $stockLocation4;
    }

    /**
     * @return string
     */
    public function getCountryOfOrigin()
    {
        return $this->countryOfOrigin;
    }

    /**
     * @param string $countryOfOrigin
     */
    public function setCountryOfOrigin($countryOfOrigin)
    {
        $this->countryOfOrigin = $countryOfOrigin;
    }

    /**
     * @return string
     */
    public function getSearchAlias()
    {
        return $this->searchAlias;
    }

    /**
     * @param string $searchAlias
     */
    public function setSearchAlias($searchAlias)
    {
        $this->searchAlias = $searchAlias;
    }

    /**
     * @return int
     */
    public function getFroogle()
    {
        return $this->froogle;
    }

    /**
     * @param int $froogle
     */
    public function setFroogle($froogle)
    {
        $this->froogle = $froogle;
    }

    /**
     * @return int
     */
    public function getKelkoo()
    {
        return $this->kelkoo;
    }

    /**
     * @param int $kelkoo
     */
    public function setKelkoo($kelkoo)
    {
        $this->kelkoo = $kelkoo;
    }

    /**
     * @return string
     */
    public function getShippingGroup()
    {
        return $this->shippingGroup;
    }

    /**
     * @param string $shippingGroup
     */
    public function setShippingGroup($shippingGroup)
    {
        $this->shippingGroup = $shippingGroup;
    }

    /**
     * @return string
     */
    public function getShopShippingGroup()
    {
        return $this->shopShippingGroup;
    }

    /**
     * @param string $shopShippingGroup
     */
    public function setShopShippingGroup($shopShippingGroup)
    {
        $this->shopShippingGroup = $shopShippingGroup;
    }

    /**
     * @return int
     */
    public function getCrossCatalogId()
    {
        return $this->crossCatalogId;
    }

    /**
     * @param int $crossCatalogId
     */
    public function setCrossCatalogId($crossCatalogId)
    {
        $this->crossCatalogId = $crossCatalogId;
    }

    /**
     * @return string
     */
    public function getFreeValue1()
    {
        return $this->freeValue1;
    }

    /**
     * @param string $freeValue1
     */
    public function setFreeValue1($freeValue1)
    {
        $this->freeValue1 = $freeValue1;
    }

    /**
     * @return string
     */
    public function getFreeValue2()
    {
        return $this->freeValue2;
    }

    /**
     * @param string $freeValue2
     */
    public function setFreeValue2($freeValue2)
    {
        $this->freeValue2 = $freeValue2;
    }

    /**
     * @return string
     */
    public function getFreeValue3()
    {
        return $this->freeValue3;
    }

    /**
     * @param string $freeValue3
     */
    public function setFreeValue3($freeValue3)
    {
        $this->freeValue3 = $freeValue3;
    }

    /**
     * @return string
     */
    public function getFreeValue4()
    {
        return $this->freeValue4;
    }

    /**
     * @param string $freeValue4
     */
    public function setFreeValue4($freeValue4)
    {
        $this->freeValue4 = $freeValue4;
    }

    /**
     * @return string
     */
    public function getFreeValue5()
    {
        return $this->freeValue5;
    }

    /**
     * @param string $freeValue5
     */
    public function setFreeValue5($freeValue5)
    {
        $this->freeValue5 = $freeValue5;
    }

    /**
     * @return string
     */
    public function getFreeValue6()
    {
        return $this->freeValue6;
    }

    /**
     * @param string $freeValue6
     */
    public function setFreeValue6($freeValue6)
    {
        $this->freeValue6 = $freeValue6;
    }

    /**
     * @return string
     */
    public function getFreeValue7()
    {
        return $this->freeValue7;
    }

    /**
     * @param string $freeValue7
     */
    public function setFreeValue7($freeValue7)
    {
        $this->freeValue7 = $freeValue7;
    }

    /**
     * @return string
     */
    public function getFreeValue8()
    {
        return $this->freeValue8;
    }

    /**
     * @param string $freeValue8
     */
    public function setFreeValue8($freeValue8)
    {
        $this->freeValue8 = $freeValue8;
    }

    /**
     * @return string
     */
    public function getFreeValue9()
    {
        return $this->freeValue9;
    }

    /**
     * @param string $freeValue9
     */
    public function setFreeValue9($freeValue9)
    {
        $this->freeValue9 = $freeValue9;
    }

    /**
     * @return string
     */
    public function getFreeValue10()
    {
        return $this->freeValue10;
    }

    /**
     * @param string $freeValue10
     */
    public function setFreeValue10($freeValue10)
    {
        $this->freeValue10 = $freeValue10;
    }

    /**
     * @return string
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * @param string $deliveryTime
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;
    }

    /**
     * @return string
     */
    public function getImageSmallURL()
    {
        return $this->imageSmallURL;
    }

    /**
     * @param string $imageSmallURL
     */
    public function setImageSmallURL($imageSmallURL)
    {
        $this->imageSmallURL = $imageSmallURL;
    }

    /**
     * @return string
     */
    public function getImageLargeURL()
    {
        return $this->imageLargeURL;
    }

    /**
     * @param string $imageLargeURL
     */
    public function setImageLargeURL($imageLargeURL)
    {
        $this->imageLargeURL = $imageLargeURL;
    }

    /**
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * @param string $imageName
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;
    }

    /**
     * @return string
     */
    public function getImageSource()
    {
        return $this->imageSource;
    }

    /**
     * @param string $imageSource
     */
    public function setImageSource($imageSource)
    {
        $this->imageSource = $imageSource;
    }

    /**
     * @return string
     */
    public function getManufacturerStandardProductIDType()
    {
        return $this->manufacturerStandardProductIDType;
    }

    /**
     * @param string $manufacturerStandardProductIDType
     */
    public function setManufacturerStandardProductIDType($manufacturerStandardProductIDType)
    {
        $this->manufacturerStandardProductIDType = $manufacturerStandardProductIDType;
    }

    /**
     * @return int
     */
    public function getManufacturerStandardProductIDValue()
    {
        return $this->manufacturerStandardProductIDValue;
    }

    /**
     * @param int $manufacturerStandardProductIDValue
     */
    public function setManufacturerStandardProductIDValue($manufacturerStandardProductIDValue)
    {
        $this->manufacturerStandardProductIDValue = $manufacturerStandardProductIDValue;
    }

    /**
     * @return mixed
     */
    public function getProductBrand()
    {
        return $this->productBrand;
    }

    /**
     * @param mixed $productBrand
     */
    public function setProductBrand($productBrand)
    {
        $this->productBrand = $productBrand;
    }

    /**
     * @return string
     */
    public function getCustomsTariffNumber()
    {
        return $this->customsTariffNumber;
    }

    /**
     * @param string $customsTariffNumber
     */
    public function setCustomsTariffNumber($customsTariffNumber)
    {
        $this->customsTariffNumber = $customsTariffNumber;
    }

    /**
     * @return string
     */
    public function getGoogleProductCategory()
    {
        return $this->googleProductCategory;
    }

    /**
     * @param string $googleProductCategory
     */
    public function setGoogleProductCategory($googleProductCategory)
    {
        $this->googleProductCategory = $googleProductCategory;
    }

    /**
     * @return int
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @param int $condition
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
    }

    /**
     * @return string
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * @param string $pattern
     */
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;
    }

    /**
     * @return string
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * @param string $material
     */
    public function setMaterial($material)
    {
        $this->material = $material;
    }

    /**
     * @return string
     */
    public function getItemColor()
    {
        return $this->itemColor;
    }

    /**
     * @param string $itemColor
     */
    public function setItemColor($itemColor)
    {
        $this->itemColor = $itemColor;
    }

    /**
     * @return string
     */
    public function getItemSize()
    {
        return $this->itemSize;
    }

    /**
     * @param string $itemSize
     */
    public function setItemSize($itemSize)
    {
        $this->itemSize = $itemSize;
    }

    /**
     * @return string
     */
    public function getCanonicalUrl()
    {
        return $this->canonicalUrl;
    }

    /**
     * @param string $canonicalUrl
     */
    public function setCanonicalUrl($canonicalUrl)
    {
        $this->canonicalUrl = $canonicalUrl;
    }

    /**
     * @return int
     */
    public function getEnergyClass()
    {
        return $this->energyClass;
    }

    /**
     * @param int $energyClass
     */
    public function setEnergyClass($energyClass)
    {
        $this->energyClass = $energyClass;
    }

    /**
     * @return string
     */
    public function getEnergyClassPictureUrl()
    {
        return $this->energyClassPictureUrl;
    }

    /**
     * @param string $energyClassPictureUrl
     */
    public function setEnergyClassPictureUrl($energyClassPictureUrl)
    {
        $this->energyClassPictureUrl = $energyClassPictureUrl;
    }

    /**
     * @return int
     */
    public function getAgeGroup()
    {
        return $this->ageGroup;
    }

    /**
     * @param int $ageGroup
     */
    public function setAgeGroup($ageGroup)
    {
        $this->ageGroup = $ageGroup;
    }

    /**
     * @return int
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param int $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getSkus()
    {
        return $this->skus;
    }

    /**
     * @param mixed $skus
     */
    public function setSkus($skus)
    {
        $this->skus = $skus;
    }

    /**
     * @return AddCatalogs
     */
    public function getAddCatalogs()
    {
        return $this->addCatalogs;
    }

    /**
     * @param AddCatalogs $addCatalogs
     */
    public function setAddCatalogs($addCatalogs)
    {
        $this->addCatalogs = $addCatalogs;
    }

    /**
     * @return AddAttributes
     */
    public function getAddAttributes()
    {
        return $this->addAttributes;
    }

    /**
     * @param AddAttributes $addAttributes
     */
    public function setAddAttributes($addAttributes)
    {
        $this->addAttributes = $addAttributes;
    }

    /**
     * @return AddBaseProducts
     */
    public function getAddBaseProducts()
    {
        return $this->addBaseProducts;
    }

    /**
     * @param AddBaseProducts $addBaseProducts
     */
    public function setAddBaseProducts($addBaseProducts)
    {
        $this->addBaseProducts = $addBaseProducts;
    }

    /**
     * @return Variation[]
     */
    public function getVariations()
    {
        return $this->variations;
    }

    /**
     * @param Variation[] $variations
     */
    public function setVariations(array $variations)
    {
        $this->variations = $variations;
    }

    /**
     * @return PartsFitment[]
     */
    public function getPartsFitments()
    {
        return $this->partsFitments;
    }

    /**
     * @param PartsFitment[] $partsFitments
     */
    public function setPartsFitments(array $partsFitments)
    {
        $this->partsFitments = $partsFitments;
    }

    /**
     * @return ProductPicture[]
     */
    public function getProductPictures()
    {
        return $this->productPictures;
    }

    /**
     * @param ProductPicture[] $productPictures
     */
    public function setProductPictures(array $productPictures)
    {
        $this->productPictures = $productPictures;
    }

    /**
     * @return AdditionalDescriptionField[]
     */
    public function getAdditionalDescriptionFields()
    {
        return $this->additionalDescriptionFields;
    }

    /**
     * @param AdditionalDescriptionField[] $additionalDescriptionFields
     */
    public function setAdditionalDescriptionFields(array $additionalDescriptionFields)
    {
        $this->additionalDescriptionFields = $additionalDescriptionFields;
    }

}

