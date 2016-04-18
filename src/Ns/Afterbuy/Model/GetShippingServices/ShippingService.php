<?php

namespace Ns\Afterbuy\Model\GetShippingServices;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

/**
 * Class ShippingService
 */
class ShippingService extends AbstractModel
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Name")
     * @var string
     */
    protected $name;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("DisplayArea")
     * @var string
     */
    protected $displayArea;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("GroupPrio")
     * @var string
     */
    protected $groupPrio;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetShippingServices\ShippingMethod>")
     * @Serializer\XmlList(entry="ShippingMethod")
     * @Serializer\SerializedName("ShippingMethods")
     * @var ShippingMethod[]
     */
    protected $shippingMethods;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return ShippingMethod[]
     */
    public function getShippingMethods()
    {
        return $this->shippingMethods;
    }

    /**
     * @return string
     */
    public function getDisplayArea()
    {
        return $this->displayArea;
    }

    /**
     * @return string
     */
    public function getGroupPrio()
    {
        return $this->groupPrio;
    }
}
