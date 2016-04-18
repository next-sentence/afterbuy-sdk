<?php

namespace Ns\Afterbuy\Model\GetShopCatalogs;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractResponse;

/**
 * Class GetShopCatalogsResponse
 *
 * @Serializer\XmlRoot("Afterbuy")
 */
class GetShopCatalogsResponse extends AbstractResponse
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetShopCatalogs\Result")
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
