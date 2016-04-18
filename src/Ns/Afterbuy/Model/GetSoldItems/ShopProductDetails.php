<?php

namespace Ns\Afterbuy\Model\GetSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

/**
 * Class ShopProductDetails
 */
class ShopProductDetails extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ProductID")
     * @var int
     */
    protected $productId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("EAN")
     * @var string
     */
    protected $ean;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("Anr")
     * @var float
     */
    protected $anr;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("UnitOfQuantity")
     * @var string
     */
    protected $unitOfQuantity;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("BasepriceFactor")
     * @var float
     */
    protected $basepriceFactor;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetSoldItems\BaseProductData")
     * @Serializer\SerializedName("BaseProductData")
     * @var BaseProductData
     */
    protected $baseProductData;

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
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
    public function getUnitOfQuantity()
    {
        return $this->unitOfQuantity;
    }

    /**
     * @return float
     */
    public function getBasepriceFactor()
    {
        return $this->basepriceFactor;
    }

    /**
     * @return BaseProductData
     */
    public function getBaseProductData()
    {
        return $this->baseProductData;
    }
}
