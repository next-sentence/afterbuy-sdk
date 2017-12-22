<?php

namespace Ns\Afterbuy\Model\GetAfterbuyTime;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\Result as BaseResult;

/**
 * Class Result
 */
class Result extends BaseResult
{
    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s', 'UTC', '!d.m.Y'>")
     * @Serializer\SerializedName("AfterbuyTimeStamp")
     * @Serializer\XmlList(entry="AfterbuyTimeStamp")
     * @var ListerHistory[]
     */
    protected $afterbuyTimeStamp;

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s', 'UTC', '!d.m.Y'>")
     * @Serializer\SerializedName("AfterbuyUniversalTimeStamp")
     * @Serializer\XmlList(entry="AfterbuyUniversalTimeStamp")
     * @var ListerHistory[]
     */
    protected $afterbuyUniversalTimeStamp;

}
