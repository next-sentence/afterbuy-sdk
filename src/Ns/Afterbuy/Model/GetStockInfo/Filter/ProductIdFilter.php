<?php

namespace Ns\Afterbuy\Model\GetStockInfo\Filter;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

class ProductIdFilter extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ProductID")
     * @var int
     */
    protected $productId;

    /**
     * @param int $productId
     */
    public function __construct($productId)
    {
        $this->productId = intval($productId);
    }
}