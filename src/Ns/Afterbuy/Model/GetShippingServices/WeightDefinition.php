<?php

namespace Ns\Afterbuy\Model\GetShippingServices;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

/**
 * Class WeightDefinition
 */
class WeightDefinition extends AbstractModel
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("WeightFrom")
     * @var float
     */
    protected $weightFrom;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("WeightTo")
     * @var float
     */
    protected $weightTo;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("Price")
     * @var float
     */
    protected $price;

    /**
     * @return float
     */
    public function getWeightFrom()
    {
        return $this->weightFrom;
    }

    /**
     * @return float
     */
    public function getWeightTo()
    {
        return $this->weightTo;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }
}
