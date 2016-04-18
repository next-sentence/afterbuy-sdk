<?php

namespace Ns\Afterbuy\Model\GetShopProducts;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class BaseProductsRelationData
 */
class BaseProductsRelationData
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Quantity")
     * @var int
     */
    protected $quantity;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("VariationLabel")
     * @var int
     */
    protected $variationLabel;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("DefaultProduct")
     * @var int
     */
    protected $defaultProduct;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Position")
     * @var int
     */
    protected $position;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetShopProducts\EbayVariationData")
     * @Serializer\SerializedName("eBayVariationData")
     * @var EbayVariationData
     */
    protected $ebayVariationData;

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return int
     */
    public function getVariationLabel()
    {
        return $this->variationLabel;
    }

    /**
     * @return int
     */
    public function getDefaultProduct()
    {
        return $this->defaultProduct;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return EbayVariationData
     */
    public function getEbayVariationData()
    {
        return $this->ebayVariationData;
    }
}
