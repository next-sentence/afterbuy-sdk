<?php

namespace Ns\Afterbuy\Model\GetSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;
use Ns\Afterbuy\Model\FloatType;

/**
 * Class ItemOriginalCurrency
 */
class ItemOriginalCurrency extends AbstractModel
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ItemPrice")
     * @var FloatType
     */
    protected $itemPrice;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ItemPriceCode")
     * @var string
     */
    protected $itemPriceCode;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ItemShipping")
     * @var FloatType
     */
    protected $itemShipping;

    /**
     * @return float
     */
    public function getItemPrice()
    {
        return $this->itemPrice->getValue();
    }

    /**
     * @return string
     */
    public function getItemPriceCode()
    {
        return $this->itemPriceCode;
    }

    /**
     * @return float
     */
    public function getItemShipping()
    {
        return $this->itemShipping->getValue();
    }

}
