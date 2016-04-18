<?php

namespace Ns\Afterbuy\Model\GetShopProducts;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\Result as BaseResult;

/**
 * Class Result
 */
class Result extends BaseResult
{
    /**
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("HasMoreProducts")
     * @var bool
     */
    protected $hasMoreProducts;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("LastProductID")
     * @var int
     */
    protected $lastProductID;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetShopProducts\Product>")
     * @Serializer\SerializedName("Products")
     * @Serializer\XmlList(entry="Product")
     * @var Product[]
     */
    protected $products;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ShippingServicesList")
     * @var string
     */
    protected $shippingServicesList;

    /**
     * @return boolean
     */
    public function isHasMoreProducts()
    {
        return $this->getBooleanAsInteger($this->hasMoreProducts);
    }

    /**
     * @return Product[]
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @return int
     */
    public function getLastProductID()
    {
        return $this->lastProductID;
    }

    /**
     * @return string
     */
    public function getShippingServicesList()
    {
        return $this->shippingServicesList;
    }
}
