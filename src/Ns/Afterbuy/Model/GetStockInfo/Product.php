<?php

namespace Ns\Afterbuy\Model\GetStockInfo;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

/**
 * Class Product
 */
class Product extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ProductID")
     * @var integer
     */
    protected $productId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Name")
     * @var string
     */
    protected $name;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Anr")
     * @var integer
     */
    protected $anr;
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("EAN")
     * @var string
     */
    protected $ean;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("AuctionQuantity")
     * @var integer
     */
    protected $auctionQuantity;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Quantity")
     * @var integer
     */
    protected $quantity;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Level")
     * @var integer
     */
    protected $level;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("FullFilmentQuantity")
     * @var integer
     */
    protected $fullFilmentQuantity;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("MinimumStock")
     * @var integer
     */
    protected $minimumStock;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("Discontinued")
     * @var boolean
     */
    protected $discontinued;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("Stock")
     * @var boolean
     */
    protected $stock;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("MergeStock")
     * @var boolean
     */
    protected $mergeStock;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("AvailableShop")
     * @var integer
     */
    protected $availableShop;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Available")
     * @var integer
     */

    protected $available;
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("RealQuantity")
     * @var integer
     */
    protected $realQuantity;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAnr()
    {
        return $this->anr;
    }

    /**
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @return int
     */
    public function getAuctionQuantity()
    {
        return $this->auctionQuantity;
    }

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
    public function getFullFilmentQuantity()
    {
        return $this->fullFilmentQuantity;
    }

    /**
     * @return int
     */
    public function getMinimumStock()
    {
        return $this->minimumStock;
    }

    /**
     * @return boolean
     */
    public function isDiscontinued()
    {
        return $this->discontinued;
    }

    /**
     * @return boolean
     */
    public function isStock()
    {
        return $this->stock;
    }

    /**
     * @return boolean
     */
    public function isMergeStock()
    {
        return $this->mergeStock;
    }

    /**
     * @return int
     */
    public function getAvailableShop()
    {
        return $this->availableShop;
    }

    /**
     * @return int
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @return int
     */
    public function getRealQuantity()
    {
        return $this->realQuantity;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }
}
