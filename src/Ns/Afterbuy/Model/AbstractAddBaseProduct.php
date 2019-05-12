<?php

namespace Ns\Afterbuy\Model;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class AbstractAddBaseProduct
 */
abstract class AbstractAddBaseProduct extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ProductID")
     * @var int
     */
    protected $productID;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ProductLabel")
     * @var string
     */
    protected $productLabel;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ProductPos")
     * @var int
     */
    protected $productPos;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("DefaultProduct")
     * @var int
     */
    protected $defaultProduct;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ProductQuantity")
     * @var int
     */
    protected $productQuantity;

    /**
     * @return integer
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * @return string
     */
    public function getProductLabel()
    {
        return $this->productLabel;
    }

    /**
     * @return integer
     */
    public function getProductPos()
    {
        return $this->productPos;
    }

    /**
     * @return integer
     */
    public function getDefaultProduct()
    {
        return $this->defaultProduct;
    }

    /**
     * @return integer
     */
    public function getProductQuantity()
    {
        return $this->productQuantity;
    }

}
