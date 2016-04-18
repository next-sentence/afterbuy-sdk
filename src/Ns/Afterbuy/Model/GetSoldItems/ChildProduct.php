<?php

namespace Ns\Afterbuy\Model\GetSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

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
     * @var float
     */
    protected $productVat;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ProductWeight")
     * @var float
     */
    protected $productWeight;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ProductUnitPrice")
     * @var float
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
        return $this->productVat;
    }

    /**
     * @return float
     */
    public function getProductWeight()
    {
        return $this->productWeight;
    }

    /**
     * @return float
     */
    public function getProductUnitPrice()
    {
        return $this->productUnitPrice;
    }
}
