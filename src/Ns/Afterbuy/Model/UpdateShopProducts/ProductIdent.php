<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;

use Ns\Afterbuy\Model\AbstractModel;
use Ns\Afterbuy\Model\FloatType;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Product
 */
class ProductIdent extends AbstractModel
{
    /**
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("ProductInsert")
     * @var bool
     */
    protected $productInsert;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("BaseProductType")
     * @var int
     */
    protected $baseProductType;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("UserProductID")
     * @var string
     */
    protected $userProductID;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ProductID")
     * @var int
     */
    protected $productID;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("Anr")
     * @var FloatType
     */
    protected $anr;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Ean")
     * @var FloatType
     */
    protected $ean;

    /**
     * @param bool $productInsert
     *
     * @return ProductIdent
     */
    public function setProductInsert($productInsert)
    {
        $this->productInsert = $productInsert;

        return $this;
    }

    /**
     * @param int $baseProductType
     *
     * @return ProductIdent
     */
    public function setBaseProductType($baseProductType)
    {
        $this->baseProductType = $baseProductType;

        return $this;
    }

    /**
     * @param string $userProductID
     *
     * @return ProductIdent
     */
    public function setUserProductID($userProductID)
    {
        $this->userProductID = $userProductID;

        return $this;
    }

    /**
     * @param int $productID
     *
     * @return ProductIdent
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;

        return $this;
    }

    /**
     * @param FloatType $anr
     *
     * @return ProductIdent
     */
    public function setAnr($anr)
    {
        $this->anr = $anr;

        return $this;
    }

    /**
     * @param string $ean
     *
     * @return ProductIdent
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

}
