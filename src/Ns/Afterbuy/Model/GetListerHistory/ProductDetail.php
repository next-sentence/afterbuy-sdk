<?php

namespace Ns\Afterbuy\Model\GetListerHistory;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\Result as BaseResult;

/**
 * Class Result
 */
class ProductDetail extends BaseResult
{

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("EAN")
     * @var integer
     */
    protected $ean;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Anr")
     * @var integer
     */
    protected $anr;

}