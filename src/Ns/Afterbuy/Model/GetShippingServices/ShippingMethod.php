<?php

namespace Ns\Afterbuy\Model\GetShippingServices;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;
use Ns\Afterbuy\Model\FloatType;

/**
 * Class ShippingMethod
 */
class ShippingMethod extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ShippingMethodID")
     * @var integer
     */
    protected $shippingMethodId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Name")
     * @var string
     */
    protected $name;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CountryGroup")
     * @var string
     */
    protected $countryGroup;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CountryGroupCountries")
     * @var string
     */
    protected $countryGroupCountries;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Level")
     * @var integer
     */
    protected $level;


    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("TaxRate")
     * @var FloatType
     */
    protected $taxRate;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Priority")
     * @var integer
     */
    protected $priority;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("PriceFrom")
     * @var FloatType
     */
    protected $priceFrom;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("PriceTo")
     * @var FloatType
     */
    protected $priceTo;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("IslandAdditionalCosts")
     * @var FloatType
     */
    protected $islandAdditionalCosts;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("FreeShippingPriceFrom")
     * @var FloatType
     */
    protected $freeShippingPriceFrom;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("AdditionalItemCosts")
     * @var FloatType
     */
    protected $additionalItemCosts;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\GetShippingServices\WeightDefinition")
     * @Serializer\SerializedName("WeightDefinitions")
     * @var WeightDefinition
     */
    protected $weightDefinitions;

    /**
     * @return int
     */
    public function getShippingMethodId()
    {
        return $this->shippingMethodId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCountryGroup()
    {
        return $this->countryGroup;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @return float
     */
    public function getTaxRate()
    {
        return $this->taxRate->getValue();
    }

    /**
     * @return float
     */
    public function getPriceFrom()
    {
        return $this->priceFrom->getValue();
    }

    /**
     * @return float
     */
    public function getPriceTo()
    {
        return $this->priceTo->getValue();
    }

    /**
     * @return float
     */
    public function getIslandAdditionalCosts()
    {
        return $this->islandAdditionalCosts->getValue();
    }

    /**
     * @return float
     */
    public function getFreeShippingPriceFrom()
    {
        return $this->freeShippingPriceFrom->getValue();
    }

    /**
     * @return WeightDefinitions
     */
    public function getWeightDefinitions()
    {
        return $this->weightDefinitions;
    }

    /**
     * @return string
     */
    public function getCountryGroupCountries()
    {
        return $this->countryGroupCountries;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @return float
     */
    public function getAdditionalItemCosts()
    {
        return $this->additionalItemCosts->getValue();
    }
}
