<?php

namespace Ns\Afterbuy\Model\GetShippingServices;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

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
     * @var float
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
     * @var float
     */
    protected $priceFrom;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("PriceTo")
     * @var float
     */
    protected $priceTo;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("IslandAdditionalCosts")
     * @var float
     */
    protected $islandAdditionalCosts;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("FreeShippingPriceFrom")
     * @var float
     */
    protected $freeShippingPriceFrom;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("AdditionalItemCosts")
     * @var float
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
        return $this->taxRate;
    }

    /**
     * @return float
     */
    public function getPriceFrom()
    {
        return $this->priceFrom;
    }

    /**
     * @return float
     */
    public function getPriceTo()
    {
        return $this->priceTo;
    }

    /**
     * @return float
     */
    public function getIslandAdditionalCosts()
    {
        return $this->islandAdditionalCosts;
    }

    /**
     * @return float
     */
    public function getFreeShippingPriceFrom()
    {
        return $this->freeShippingPriceFrom;
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
        return $this->additionalItemCosts;
    }
}
