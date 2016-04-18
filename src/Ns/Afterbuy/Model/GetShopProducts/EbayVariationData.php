<?php

namespace Ns\Afterbuy\Model\GetShopProducts;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class EbayVariationData
 */
class EbayVariationData
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("eBayVariationName")
     * @var string
     */
    protected $ebayVariationName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("eBayVariationValue")
     * @var string
     */
    protected $ebayVariationValue;

    /**
     * @return string
     */
    public function getEbayVariationName()
    {
        return $this->ebayVariationName;
    }

    /**
     * @return string
     */
    public function getEbayVariationValue()
    {
        return $this->ebayVariationValue;
    }
}
