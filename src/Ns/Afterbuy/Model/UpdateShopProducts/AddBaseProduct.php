<?php

namespace Ns\Afterbuy\Model\GetShopProducts;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractAddBaseProduct;

/**
 * Class AddBaseProduct
 */
class AddBaseProduct extends AbstractAddBaseProduct
{
    /**
     * @var int $productID
     * @return $this
     */
    public function setProductID($productID)
    {
       $this->productID = $productID;
       return $this;
    }

    /**
     * @var int $productPos
     * @return $this
     */
    public function setProductPos($productPos)
    {
        $this->productPos = $productPos;
        return $this;
    }

    /**
     * @var int $productQuantity
     * @return $this
     */
    public function setProductQuantity($productQuantity)
    {
        $this->productQuantity = $productQuantity;
        return $this;
    }

    /**
     * @var int $defaultProduct
     * @return $this
     */
    public function setDefaultProduct($defaultProduct)
    {
        $this->defaultProduct = $defaultProduct;
        return $this;
    }

    /**
     * @var string $productLabel
     * @return $this
     */
    public function setProductLabel($productLabel)
    {
        $this->productLabel = $productLabel;
        return $this;
    }

}
