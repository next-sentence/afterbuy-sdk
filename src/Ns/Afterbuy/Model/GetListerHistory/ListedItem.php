<?php

namespace Ns\Afterbuy\Model\GetListerHistory;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;
use Ns\Afterbuy\Model\FloatType;

/**
 * Class PaymentService
 */
class ListedItem extends AbstractModel
{

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("HistoryID")
     * @var integer
     */
    protected $historyId;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ListingID")
     * @var integer
     */
    protected $listingId;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ProductID")
     * @var integer
     */
    protected $productId;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("VariationType")
     * @var string
     */
    protected $variationType;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetListerHistory\ListingDetail")
     * @Serializer\SerializedName("ListingDetails")
     * @var string
     */
    protected $listingDetail;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetListerHistory\ProductDetail")
     * @Serializer\SerializedName("ProductDetails")
     * @var string
     */
    protected $productDetail;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("UnitOfQuantity")
     * @var integer
     */
    protected $unitOfQuantity;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("BasepriceFactor")
     * @var FloatType
     */
    protected $basepriceFactor;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Name")
     * @var FloatType
     */
    protected $name;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ShortDescription")
     * @var FloatType
     */
    protected $shortDescription;

}
