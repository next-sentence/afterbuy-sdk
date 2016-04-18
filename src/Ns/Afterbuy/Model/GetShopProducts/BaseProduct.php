<?php

namespace Ns\Afterbuy\Model\GetShopProducts;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class BaseProduct
 */
class BaseProduct
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("BaseProductID")
     * @var int
     */
    protected $baseProductId;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("BaseProductType")
     * @var int
     */
    protected $baseProductType;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetShopProducts\BaseProductsRelationData")
     * @Serializer\SerializedName("BaseProductsRelationData")
     * @var BaseProductsRelationData
     */
    protected $baseProductsRelationData;

    /**
     * @return int
     */
    public function getBaseProductId()
    {
        return $this->baseProductId;
    }

    /**
     * @return int
     */
    public function getBaseProductType()
    {
        return $this->baseProductType;
    }

    /**
     * @return BaseProductsRelationData
     */
    public function getBaseProductsRelationData()
    {
        return $this->baseProductsRelationData;
    }
}
