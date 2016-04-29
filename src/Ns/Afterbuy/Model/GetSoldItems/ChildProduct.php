<?php

namespace Ns\Afterbuy\Model\GetSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;
use Ns\Afterbuy\Model\FloatType;

/**
 * Class ChildProduct
 */
class ChildProduct extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ProductID")
     * @var int
     */
    protected $productId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ProductEAN")
     * @var string
     */
    protected $productEan;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ProductANr")
     * @var int
     */
    protected $productAnr;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ProductName")
     * @var string
     */
    protected $productName;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ProductQuantity")
     * @var int
     */
    protected $productQuantity;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ProductVAT")
     * @var FloatType
     */
    protected $productVat;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ProductWeight")
     * @var FloatType
     */
    protected $productWeight;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ProductUnitPrice")
     * @var FloatType
     */
    protected $productUnitPrice;

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
    public function getProductEan()
    {
        return $this->productEan;
    }

    /**
     * @return int
     */
    public function getProductAnr()
    {
        return $this->productAnr;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @return int
     */
    public function getProductQuantity()
    {
        return $this->productQuantity;
    }

    /**
     * @return float
     */
    public function getProductVat()
    {
        return $this->productVat->getValue();
    }

    /**
     * @return float
     */
    public function getProductWeight()
    {
        return $this->productWeight->getValue();
    }

    /**
     * @return float
     */
    public function getProductUnitPrice()
    {
        return $this->productUnitPrice->getValue();
    }
}
