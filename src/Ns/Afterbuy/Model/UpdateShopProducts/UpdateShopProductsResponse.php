<?php

namespace Ns\Afterbuy\Model\UpdateShopProductsResponse;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractResponse;
use Ns\Afterbuy\Model\Result;

/**
 * Class UpdateSoldItemsResponse
 *
 * @Serializer\XmlRoot("Afterbuy")
 */
class UpdateShopProductsResponse extends AbstractResponse
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\Result")
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
