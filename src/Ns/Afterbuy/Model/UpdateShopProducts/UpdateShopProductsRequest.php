<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractRequest;
use Ns\Afterbuy\Model\AfterbuyGlobal;

/**
 * Class UpdateShopProductsRequest
 *
 * @Serializer\XmlRoot("Request")
 */
class UpdateShopProductsRequest extends AbstractRequest
{
    const CALL_NAME = 'UpdateShopProducts';

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\UpdateShopProducts\Product>")
     * @Serializer\XmlList(entry="Product")
     * @Serializer\SerializedName("Products")
     * @var Product[]
     */
    protected $products;

    /**
     * @param AfterbuyGlobal $afterbuyGlobal
     */
    public function __construct(AfterbuyGlobal $afterbuyGlobal)
    {
        parent::__construct($afterbuyGlobal);
        $this->setCallName(self::CALL_NAME);
    }

    /**
     * @param Product $product
     *
     * @return $this
     */
    public function addProduct(Product $product)
    {
        $this->products[] = $product;
        return $this;
    }

    /**
     * @return Product[]
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param Product[] $products
     * @return $this
     */
    public function setProducts(array $products)
    {
        $this->products = $products;
        return $this;
    }
}
