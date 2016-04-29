<?php

namespace Ns\Afterbuy\Model\GetShippingServices;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;
use Ns\Afterbuy\Model\FloatType;

/**
 * Class WeightDefinition
 */
class WeightDefinition extends AbstractModel
{
    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("WeightFrom")
     * @var FloatType
     */
    protected $weightFrom;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("WeightTo")
     * @var FloatType
     */
    protected $weightTo;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("Price")
     * @var FloatType
     */
    protected $price;

    /**
     * @return float
     */
    public function getWeightFrom()
    {
        return $this->weightFrom->getValue();
    }

    /**
     * @return float
     */
    public function getWeightTo()
    {
        return $this->weightTo->getValue();
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price->getValue();
    }
}
