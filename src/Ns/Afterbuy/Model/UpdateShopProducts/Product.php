<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;

use Ns\Afterbuy\Model\FloatType;
use Ns\Afterbuy\Model\GetShopProducts\AdditionalDescriptionField;
use Ns\Afterbuy\Model\GetShopProducts\Attribute;
use Ns\Afterbuy\Model\GetShopProducts\BaseProduct;
use Ns\Afterbuy\Model\GetShopProducts\Feature;
use Ns\Afterbuy\Model\GetShopProducts\PartsFitment;
use Ns\Afterbuy\Model\GetShopProducts\ProductPicture;
use Ns\Afterbuy\Model\GetShopProducts\ScaledDiscount;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Product
 */
class Product extends \Ns\Afterbuy\Model\GetShopProducts\Product
{

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\UpdateShopProducts\ProductIdent")
     * @Serializer\SerializedName("ProductIdent")
     * @var ProductIdent
     */
    protected $productIdent;

    /**
     * @param int $productId
     *
     * @return Product
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param \DateTime $modDate
     *
     * @return Product
     */
    public function setModDate($modDate)
    {
        $this->modDate = $modDate;

        return $this;
    }

    /**
     * @param string $memo
     *
     * @return Product
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;

        return $this;
    }

    /**
     * @param string $keywords
     *
     * @return Product
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * @param int $mergeStock
     *
     * @return Product
     */
    public function setMergeStock($mergeStock)
    {
        $this->mergeStock = $mergeStock;

        return $this;
    }

    /**
     * @param int $minimumStock
     *
     * @return Product
     */
    public function setMinimumStock($minimumStock)
    {
        $this->minimumStock = $minimumStock;

        return $this;
    }

    /**
     * @param int $minimumOrderQuantity
     *
     * @return Product
     */
    public function setMinimumOrderQuantity($minimumOrderQuantity)
    {
        $this->minimumOrderQuantity = $minimumOrderQuantity;

        return $this;
    }

    /**
     * @param int $level
     *
     * @return Product
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * @param int $position
     *
     * @return Product
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @param string $googleBaseShipping
     *
     * @return Product
     */
    public function setGoogleBaseShipping($googleBaseShipping)
    {
        $this->googleBaseShipping = $googleBaseShipping;

        return $this;
    }

    /**
     * @param int $kelkoo
     *
     * @return Product
     */
    public function setKelkoo($kelkoo)
    {
        $this->kelkoo = $kelkoo;

        return $this;
    }

    /**
     * @param string $imageSmallURL
     *
     * @return Product
     */
    public function setImageSmallURL($imageSmallURL)
    {
        $this->imageSmallURL = $imageSmallURL;

        return $this;
    }

    /**
     * @param string $imageLargeURL
     *
     * @return Product
     */
    public function setImageLargeURL($imageLargeURL)
    {
        $this->imageLargeURL = $imageLargeURL;

        return $this;
    }

    /**
     * @param string $manufacturerStandardProductIDType
     *
     * @return Product
     */
    public function setManufacturerStandardProductIDType($manufacturerStandardProductIDType)
    {
        $this->manufacturerStandardProductIDType = $manufacturerStandardProductIDType;

        return $this;
    }

    /**
     * @param string $productBrand
     *
     * @return Product
     */
    public function setProductBrand($productBrand)
    {
        $this->productBrand = $productBrand;

        return $this;
    }

    /**
     * @param string $manufacturerPartNumber
     *
     * @return Product
     */
    public function setManufacturerPartNumber($manufacturerPartNumber)
    {
        $this->manufacturerPartNumber = $manufacturerPartNumber;

        return $this;
    }

    /**
     * @param string $material
     *
     * @return Product
     */
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * @param string $pattern
     *
     * @return Product
     */
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;

        return $this;
    }

    /**
     * @param ProductPicture[] $productPictures
     *
     * @return Product
     */
    public function setProductPictures($productPictures)
    {
        $this->productPictures = $productPictures;

        return $this;
    }

    /**
     * @param PartsFitment $partsFitment
     *
     * @return Product
     */
    public function setPartsFitment($partsFitment)
    {
        $this->partsFitment = $partsFitment;

        return $this;
    }

    /**
     * @param ProductIdent $productIdent
     *
     * @return Product
     */
    public function setProductIdent($productIdent)
    {
        $this->productIdent = $productIdent;

        return $this;
    }

    /**
     * @param int $productShopOption
     *
     * @return Product
     */
    public function setProductShopOption($productShopOption)
    {
        $this->productShopOption = $productShopOption;

        return $this;
    }

    /**
     * @param FloatType $anr
     *
     * @return Product
     */
    public function setAnr($anr)
    {
        $this->anr = $anr;

        return $this;
    }

    /**
     * @param string $ean
     *
     * @return Product
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * @param string $variationName
     *
     * @return Product
     */
    public function setVariationName($variationName)
    {
        $this->variationName = $variationName;

        return $this;
    }

    /**
     * @param int $baseProductFlag
     *
     * @return Product
     */
    public function setBaseProductFlag($baseProductFlag)
    {
        $this->baseProductFlag = $baseProductFlag;

        return $this;
    }

    /**
     * @param int $baseProductShowMode
     *
     * @return Product
     */
    public function setBaseProductShowMode($baseProductShowMode)
    {
        $this->baseProductShowMode = $baseProductShowMode;

        return $this;
    }

    /**
     * @param BaseProduct[] $baseProducts
     *
     * @return Product
     */
    public function setBaseProducts($baseProducts)
    {
        $this->baseProducts = $baseProducts;

        return $this;
    }

    /**
     * @param string $shortDescription
     *
     * @return Product
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * @param string $googleBaseLabels
     *
     * @return Product
     */
    public function setGoogleBaseLabels($googleBaseLabels)
    {
        $this->googleBaseLabels = $googleBaseLabels;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param int $availableShop
     *
     * @return Product
     */
    public function setAvailableShop($availableShop)
    {
        $this->availableShop = $availableShop;

        return $this;
    }

    /**
     * @param int $quantity
     *
     * @return Product
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param int $auctionQuantity
     *
     * @return Product
     */
    public function setAuctionQuantity($auctionQuantity)
    {
        $this->auctionQuantity = $auctionQuantity;

        return $this;
    }

    /**
     * @param int $stock
     *
     * @return Product
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * @param bool $discontinued
     *
     * @return Product
     */
    public function setDiscontinued($discontinued)
    {
        $this->discontinued = $discontinued;

        return $this;
    }

    /**
     * @param string $unitOfQuantity
     *
     * @return Product
     */
    public function setUnitOfQuantity($unitOfQuantity)
    {
        $this->unitOfQuantity = $unitOfQuantity;

        return $this;
    }

    /**
     * @param FloatType $basepriceFactor
     *
     * @return Product
     */
    public function setBasepriceFactor($basepriceFactor)
    {
        $this->basepriceFactor = $basepriceFactor;

        return $this;
    }

    /**
     * @param int $fullFilmentQuantity
     *
     * @return Product
     */
    public function setFullFilmentQuantity($fullFilmentQuantity)
    {
        $this->fullFilmentQuantity = $fullFilmentQuantity;

        return $this;
    }

    /**
     * @param \DateTime $fullFilmentImport
     *
     * @return Product
     */
    public function setFullFilmentImport($fullFilmentImport)
    {
        $this->fullFilmentImport = $fullFilmentImport;

        return $this;
    }

    /**
     * @param FloatType $sellingPrice
     *
     * @return Product
     */
    public function setSellingPrice($sellingPrice)
    {
        $this->sellingPrice = $sellingPrice;

        return $this;
    }

    /**
     * @param FloatType $buyingPrice
     *
     * @return Product
     */
    public function setBuyingPrice($buyingPrice)
    {
        $this->buyingPrice = $buyingPrice;

        return $this;
    }

    /**
     * @param FloatType $dealerPrice
     *
     * @return Product
     */
    public function setDealerPrice($dealerPrice)
    {
        $this->dealerPrice = $dealerPrice;

        return $this;
    }

    /**
     * @param int $titleReplace
     *
     * @return Product
     */
    public function setTitleReplace($titleReplace)
    {
        $this->titleReplace = $titleReplace;

        return $this;
    }

    /**
     * @param ScaledDiscount[] $scaledDiscounts
     *
     * @return Product
     */
    public function setScaledDiscounts($scaledDiscounts)
    {
        $this->scaledDiscounts = $scaledDiscounts;

        return $this;
    }

    /**
     * @param FloatType $taxRate
     *
     * @return Product
     */
    public function setTaxRate($taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * @param FloatType $weight
     *
     * @return Product
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @param string $searchAlias
     *
     * @return Product
     */
    public function setSearchAlias($searchAlias)
    {
        $this->searchAlias = $searchAlias;

        return $this;
    }

    /**
     * @param int $froogle
     *
     * @return Product
     */
    public function setFroogle($froogle)
    {
        $this->froogle = $froogle;

        return $this;
    }

    /**
     * @param string $shippingGroup
     *
     * @return Product
     */
    public function setShippingGroup($shippingGroup)
    {
        $this->shippingGroup = $shippingGroup;

        return $this;
    }

    /**
     * @param string $shopShippingGroup
     *
     * @return Product
     */
    public function setShopShippingGroup($shopShippingGroup)
    {
        $this->shopShippingGroup = $shopShippingGroup;

        return $this;
    }

    /**
     * @param string $searchEngineShipping
     *
     * @return Product
     */
    public function setSearchEngineShipping($searchEngineShipping)
    {
        $this->searchEngineShipping = $searchEngineShipping;

        return $this;
    }

    /**
     * @param int $crossCatalogId
     *
     * @return Product
     */
    public function setCrossCatalogId($crossCatalogId)
    {
        $this->crossCatalogId = $crossCatalogId;

        return $this;
    }

    /**
     * @param string $freeValue1
     *
     * @return Product
     */
    public function setFreeValue1($freeValue1)
    {
        $this->freeValue1 = $freeValue1;

        return $this;
    }

    /**
     * @param string $freeValue2
     *
     * @return Product
     */
    public function setFreeValue2($freeValue2)
    {
        $this->freeValue2 = $freeValue2;

        return $this;
    }

    /**
     * @param string $freeValue3
     *
     * @return Product
     */
    public function setFreeValue3($freeValue3)
    {
        $this->freeValue3 = $freeValue3;

        return $this;
    }

    /**
     * @param string $freeValue4
     *
     * @return Product
     */
    public function setFreeValue4($freeValue4)
    {
        $this->freeValue4 = $freeValue4;

        return $this;
    }

    /**
     * @param string $freeValue5
     *
     * @return Product
     */
    public function setFreeValue5($freeValue5)
    {
        $this->freeValue5 = $freeValue5;

        return $this;
    }

    /**
     * @param string $freeValue6
     *
     * @return Product
     */
    public function setFreeValue6($freeValue6)
    {
        $this->freeValue6 = $freeValue6;

        return $this;
    }

    /**
     * @param string $freeValue7
     *
     * @return Product
     */
    public function setFreeValue7($freeValue7)
    {
        $this->freeValue7 = $freeValue7;

        return $this;
    }

    /**
     * @param string $freeValue8
     *
     * @return Product
     */
    public function setFreeValue8($freeValue8)
    {
        $this->freeValue8 = $freeValue8;

        return $this;
    }

    /**
     * @param string $freeValue9
     *
     * @return Product
     */
    public function setFreeValue9($freeValue9)
    {
        $this->freeValue9 = $freeValue9;

        return $this;
    }

    /**
     * @param string $freeValue10
     *
     * @return Product
     */
    public function setFreeValue10($freeValue10)
    {
        $this->freeValue10 = $freeValue10;

        return $this;
    }

    /**
     * @param string $stockLocation1
     *
     * @return Product
     */
    public function setStockLocation1($stockLocation1)
    {
        $this->stockLocation1 = $stockLocation1;

        return $this;
    }

    /**
     * @param string $stockLocation2
     *
     * @return Product
     */
    public function setStockLocation2($stockLocation2)
    {
        $this->stockLocation2 = $stockLocation2;

        return $this;
    }

    /**
     * @param string $stockLocation3
     *
     * @return Product
     */
    public function setStockLocation3($stockLocation3)
    {
        $this->stockLocation3 = $stockLocation3;

        return $this;
    }

    /**
     * @param string $stockLocation4
     *
     * @return Product
     */
    public function setStockLocation4($stockLocation4)
    {
        $this->stockLocation4 = $stockLocation4;

        return $this;
    }

    /**
     * @param string $deliveryTime
     *
     * @return Product
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;

        return $this;
    }

    /**
     * @param string $amazonStandardProductIDType
     *
     * @return Product
     */
    public function setAmazonStandardProductIDType($amazonStandardProductIDType)
    {
        $this->amazonStandardProductIDType = $amazonStandardProductIDType;

        return $this;
    }

    /**
     * @param int $amazonStandardProductIDValue
     *
     * @return Product
     */
    public function setAmazonStandardProductIDValue($amazonStandardProductIDValue)
    {
        $this->amazonStandardProductIDValue = $amazonStandardProductIDValue;

        return $this;
    }

    /**
     * @param int $ManufacturerStandardProductIDValue
     *
     * @return Product
     */
    public function setManufacturerStandardProductIDValue($ManufacturerStandardProductIDValue)
    {
        $this->ManufacturerStandardProductIDValue = $ManufacturerStandardProductIDValue;

        return $this;
    }

    /**
     * @param array $skus
     *
     * @return Product
     */
    public function setSkus($skus)
    {
        $this->skus = $skus;

        return $this;
    }

    /**
     * @param array $catalogs
     *
     * @return Product
     */
    public function setCatalogs($catalogs)
    {
        $this->catalogs = $catalogs;

        return $this;
    }

    /**
     * @param int $facebook
     *
     * @return Product
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * @param int $condition
     *
     * @return Product
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * @param int $ageGroup
     *
     * @return Product
     */
    public function setAgeGroup($ageGroup)
    {
        $this->ageGroup = $ageGroup;

        return $this;
    }

    /**
     * @param int $gender
     *
     * @return Product
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * @param string $customLabel10
     *
     * @return Product
     */
    public function setCustomLabel10($customLabel10)
    {
        $this->customLabel10 = $customLabel10;

        return $this;
    }

    /**
     * @param string $customLabel11
     *
     * @return Product
     */
    public function setCustomLabel11($customLabel11)
    {
        $this->customLabel11 = $customLabel11;

        return $this;
    }

    /**
     * @param string $customLabel12
     *
     * @return Product
     */
    public function setCustomLabel12($customLabel12)
    {
        $this->customLabel12 = $customLabel12;

        return $this;
    }

    /**
     * @param string $customLabel13
     *
     * @return Product
     */
    public function setCustomLabel13($customLabel13)
    {
        $this->customLabel13 = $customLabel13;

        return $this;
    }

    /**
     * @param string $customLabel14
     *
     * @return Product
     */
    public function setCustomLabel14($customLabel14)
    {
        $this->customLabel14 = $customLabel14;

        return $this;
    }

    /**
     * @param Attribute[] $attributes
     *
     * @return Product
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @param Feature[] $features
     *
     * @return Product
     */
    public function setFeatures($features)
    {
        $this->features = $features;

        return $this;
    }

    /**
     * @param AdditionalDescriptionField[] $additionalDescriptionFields
     *
     * @return Product
     */
    public function setAdditionalDescriptionFields($additionalDescriptionFields)
    {
        $this->additionalDescriptionFields = $additionalDescriptionFields;

        return $this;
    }

}
