<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;

use Ns\Afterbuy\Model\FloatType;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class NewProducts
 */
class NewProducts
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\UpdateShopProducts\NewProducts")
     * @Serializer\SerializedName("NewProducts")
     * @Serializer\XmlList(entry="NewProduct")
     * @var NewProduct[]
     */
    protected $newProducts;

    /**
     * @return NewProduct[]
     */
    public function getNewProducts()
    {
        return $this->newProducts;
    }

    /**
     * @param NewProduct[] $newProducts
     * @return $this
     */
    public function setNewProducts($newProducts)
    {
        $this->newProducts = $newProducts;
        return $this;
    }

    /**
     * @param NewProduct $newProduct
     * @return $this
     */
    public function addNewProduct($newProduct)
    {
        $this->newProducts[] = $newProduct;
        return $this;
    }

}

