<?php

namespace Ns\Afterbuy\Model\GetStockInfo;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\Result as BaseResult;

/**
 * Class Result
 */
class Result extends BaseResult
{
    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetStockInfo\Product>")
     * @Serializer\SerializedName("Products")
     * @Serializer\XmlList(entry="Product")
     * @var Product[]
     */
    protected $products;

    /**
     * @return Product[]
     */
    public function getProducts()
    {
        return $this->products;
    }
}
