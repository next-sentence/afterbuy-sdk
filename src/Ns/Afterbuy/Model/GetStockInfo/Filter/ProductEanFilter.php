<?php

namespace Ns\Afterbuy\Model\GetStockInfo\Filter;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

class ProductEanFilter extends AbstractModel
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("EAN")
     * @var string
     */
    protected $ean;

    /**
     * @param int $ean
     */
    public function __construct($ean)
    {
        $this->ean = strval($ean);
    }
}