<?php

namespace Ns\Afterbuy\Model\GetListerHistory;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\Result as BaseResult;

/**
 * Class Result
 */
class Result extends BaseResult
{
    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetListerHistory\ListedItem>")
     * @Serializer\SerializedName("ListedItems")
     * @Serializer\XmlList(entry="ListedItem")
     * @var ListerHistory[]
     */
    protected $listedItems;
	
}
