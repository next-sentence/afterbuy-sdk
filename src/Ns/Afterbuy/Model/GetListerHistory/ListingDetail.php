<?php

namespace Ns\Afterbuy\Model\GetListerHistory;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\Result as BaseResult;
//use Ns\Afterbuy\Model\FloatType;

/**
 * Class Result
 */
class ListingDetail extends BaseResult
{

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Anr")
     * @var integer
     */
    protected $anr;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("SoldItems")
     * @var integer
     */
    protected $soldItems;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ListedQuantity")
     * @var integer
     */
    protected $listedQuantity;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ListingPlattform")
     * @var integer
     */
    protected $listingPlattform;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ListingTitle")
     * @var integer
     */
    protected $listingTitle;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ListingSubTitle")
     * @var integer
     */
    protected $listingSubTitle;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("eBayCurrencyId")
     * @var integer
     */
    protected $eBayCurrencyId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("eBayCurrency")
     * @var integer
     */
    protected $eBayCurrency;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("eBayCategoryID")
     * @var integer
     */
    protected $eBayCategoryID;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("eBayCategory2ID")
     * @var integer
     */
    protected $eBayCategory2ID;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("eBayStartprice")
     * @var integer
     */
    protected $eBayStartprice;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("eBayBuyItNowPrice")
     * @var integer
     */
    protected $eBayBuyItNowPrice;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("eBayPictureURL")
     * @var integer
     */
    protected $eBayPictureURL;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("eBayGaleryURL")
     * @var integer
     */
    protected $eBayGaleryURL;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("eBayRelist")
     * @var integer
     */
    protected $eBayRelist;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("SellStatus")
     * @var integer
     */
    protected $sellStatus;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("ListingFee")
     * @var integer
     */
    protected $listingFee;

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s', 'UTC', '!d.m.Y'>")
     * @Serializer\SerializedName("StartTime")
     * @var integer
     */
    protected $startTime;

    /**
     * @Serializer\Type("DateTime<'d.m.Y H:i:s', 'UTC', '!d.m.Y'>")
     * @Serializer\SerializedName("EndTime")
     * @var integer
     */
    protected $endTime;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ListingDuration")
     * @var integer
     */
    protected $listingDuration;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ListingType")
     * @var integer
     */
    protected $listingType;

}
