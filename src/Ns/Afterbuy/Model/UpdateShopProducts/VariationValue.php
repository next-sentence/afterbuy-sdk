<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;
use Ns\Afterbuy\Model\AbstractAddCatalog;
use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractVariationValue;

/**
 * Class VariationValue
 */
class VariationValue extends AbstractVariationValue
{
    /**
     * @param integer $validForProdID
     * @return $this
     */
    public function setValidForProdID($validForProdID)
    {
        $this->validForProdID = $validForProdID;
        return $this;
    }

    /**
     * @param integer $variationPos
     * @return $this
     */
    public function setVariationPos($variationPos)
    {
        $this->variationPos = $variationPos;
        return $this;
    }

    /**
     * @param string $variationValue
     * @return $this
     */
    public function setVariationValue($variationValue)
    {
        $this->variationValue = $variationValue;
        return $this;
    }

    /**
     * @param string $variationPicURL
     * @return $this
     */
    public function setVariationPicURL($variationPicURL)
    {
        $this->variationPicURL = $variationPicURL;
        return $this;
    }
}

