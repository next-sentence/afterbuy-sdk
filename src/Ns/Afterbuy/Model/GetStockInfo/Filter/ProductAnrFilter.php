<?php

namespace Ns\Afterbuy\Model\GetStockInfo\Filter;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

class ProductAnrFilter extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Anr")
     * @var int
     */
    protected $anr;

    /**
     * @param int $anr
     */
    public function __construct($anr)
    {
        $this->anr = intval($anr);
    }
}