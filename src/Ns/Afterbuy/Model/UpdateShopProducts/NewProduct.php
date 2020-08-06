<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;

use Ns\Afterbuy\Model\FloatType;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class NewProduct
 */
class NewProduct
{

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ProductID")
     * @var int
     */
    protected $productId;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ProductIDRequested")
     * @var int
     */
    protected $productIdRequested;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("UserProductID")
     * @var string
     */
    protected $userProductId;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("AnrRequested")
     * @var FloatType
     */
    protected $anrRequested;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("EANRequested")
     * @var int
     */
    protected $eanRequested;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Anr")
     * @var int
     */
    protected $anr;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("EAN")
     * @var int
     */
    protected $eam;

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    /**
     * @return int
     */
    public function getProductIdRequested()
    {
        return $this->productIdRequested;
    }

    /**
     * @param int $productIdRequested
     */
    public function setProductIdRequested($productIdRequested)
    {
        $this->productIdRequested = $productIdRequested;
    }

    /**
     * @return string
     */
    public function getUserProductId()
    {
        return $this->userProductId;
    }

    /**
     * @param string $userProductId
     */
    public function setUserProductId($userProductId)
    {
        $this->userProductId = $userProductId;
    }

    /**
     * @return FloatType
     */
    public function getAnrRequested()
    {
        return $this->anrRequested;
    }

    /**
     * @param FloatType $anrRequested
     */
    public function setAnrRequested($anrRequested)
    {
        $this->anrRequested = $anrRequested;
    }

    /**
     * @return int
     */
    public function getEanRequested()
    {
        return $this->eanRequested;
    }

    /**
     * @param int $eanRequested
     */
    public function setEanRequested($eanRequested)
    {
        $this->eanRequested = $eanRequested;
    }

    /**
     * @return int
     */
    public function getAnr()
    {
        return $this->anr;
    }

    /**
     * @param int $anr
     */
    public function setAnr($anr)
    {
        $this->anr = $anr;
    }

    /**
     * @return int
     */
    public function getEam()
    {
        return $this->eam;
    }

    /**
     * @param int $eam
     */
    public function setEam($eam)
    {
        $this->eam = $eam;
    }

}

