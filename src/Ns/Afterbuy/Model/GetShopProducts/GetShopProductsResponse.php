<?php

namespace Ns\Afterbuy\Model\GetShopProducts;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractResponse;

/**
 * Class GetShopProductsResponse
 *
 * @Serializer\XmlRoot("Afterbuy")
 */
class GetShopProductsResponse extends AbstractResponse
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetShopProducts\Result")
     * @Serializer\SerializedName("Result")
     * @var Result
     */
    protected $result;

    /**
     * @return Result
     */
    public function getResult()
    {
        return $this->result;
    }
}
