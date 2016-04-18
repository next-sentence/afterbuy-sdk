<?php

namespace Ns\Afterbuy\Model\GetSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractResponse;

/**
 * Class GetSoldItemsResponse
 *
 * @Serializer\XmlRoot("Afterbuy")
 */
class GetSoldItemsResponse extends AbstractResponse
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetSoldItems\Result")
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
