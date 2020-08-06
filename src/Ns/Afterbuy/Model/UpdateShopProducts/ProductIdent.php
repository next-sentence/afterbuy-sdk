<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;
use Ns\Afterbuy\Model\AbstractProductIdent;
use Ns\Afterbuy\Model\FloatType;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class ProductIdent
 */
class ProductIdent extends AbstractProductIdent
{
    /**
     * @param integer $baseProductType
     *
     * @return $this
     */
    public function setBaseProductType($baseProductType)
    {
        $this->baseProductType = $baseProductType;
        return $this;
    }

    /**
     * @param string $userProductID
     *
     * @return $this
     */
    public function setUserProductID($userProductID)
    {
        $this->userProductID = $userProductID;
        return $this;
    }

    /**
     * @param integer $productID
     *
     * @return $this
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;
        return $this;
    }

    /**
     * @param FloatType $anr
     *
     * @return $this
     */
    public function setAnr($anr)
    {
        $this->anr = $anr;
        return $this;
    }

    /**
     * @param string $ean
     *
     * @return $this
     */
    public function setEAN($ean)
    {
        $this->ean = $ean;
        return $this;
    }
}

