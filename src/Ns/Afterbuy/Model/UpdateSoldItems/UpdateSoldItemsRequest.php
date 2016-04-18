<?php

namespace Ns\Afterbuy\Model\UpdateSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractRequest;
use Ns\Afterbuy\Model\AfterbuyGlobal;

/**
 * Class UpdateSoldItemsRequest
 *
 * @Serializer\XmlRoot("Request")
 */
class UpdateSoldItemsRequest extends AbstractRequest
{
    const CALL_NAME = 'UpdateSoldItems';

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\UpdateSoldItems\Order>")
     * @Serializer\XmlList(entry="Order")
     * @Serializer\SerializedName("Orders")
     * @var Order[]
     */
    protected $orders;

    /**
     * @param AfterbuyGlobal $afterbuyGlobal
     */
    public function __construct(AfterbuyGlobal $afterbuyGlobal)
    {
        parent::__construct($afterbuyGlobal);

        $this->setCallName(self::CALL_NAME);
    }

    /**
     * @param Order $order
     *
     * @return $this
     */
    public function addOrder(Order $order)
    {
        $this->orders[] = $order;

        return $this;
    }

    /**
     * @return Order[]
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @param Order[] $orders
     *
     * @return $this
     */
    public function setOrders(array $orders)
    {
        $this->orders = $orders;

        return $this;
    }
}
