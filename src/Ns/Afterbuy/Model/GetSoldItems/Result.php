<?php

namespace Ns\Afterbuy\Model\GetSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\Result as BaseResult;

/**
 * Class Result
 */
class Result extends BaseResult
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\Accessor(setter="setHasMoreItemsFromInteger")
     * @Serializer\SerializedName("HasMoreItems")
     * @var bool
     */
    protected $hasMoreItems;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("OrdersCount")
     * @var int
     */
    protected $ordersCount;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("LastOrderID")
     * @var int
     */
    protected $lastOrderId;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ItemsCount")
     * @var int
     */
    protected $itemsCount;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetSoldItems\Order>")
     * @Serializer\SerializedName("Orders")
     * @Serializer\XmlList(entry="Order")
     * @var Order[]
     */
    protected $orders;

    /**
     * @param int $value
     */
    public function setHasMoreItemsFromInteger($value)
    {
        $this->hasMoreItems = $this->setBooleanFromInteger($value);
    }

    /**
     * @return bool
     */
    public function isHasMoreItems()
    {
        return $this->hasMoreItems;
    }

    /**
     * @return int
     */
    public function getOrdersCount()
    {
        return $this->ordersCount;
    }

    /**
     * @return int
     */
    public function getLastOrderId()
    {
        return $this->lastOrderId;
    }

    /**
     * @return int
     */
    public function getItemsCount()
    {
        return $this->itemsCount;
    }

    /**
     * @return Order[]
     */
    public function getOrders()
    {
        return $this->orders;
    }
}
