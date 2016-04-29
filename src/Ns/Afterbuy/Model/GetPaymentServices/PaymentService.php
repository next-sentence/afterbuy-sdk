<?php

namespace Ns\Afterbuy\Model\GetPaymentServices;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;
use \DateTime;
use Ns\Afterbuy\Model\FloatType;

/**
 * Class PaymentService
 */
class PaymentService extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("PaymentID")
     * @var integer
     */
    protected $paymentId;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("PaymentFunctionID")
     * @var integer
     */
    protected $paymentFunctionID;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("StandardText")
     * @var string
     */
    protected $standardText;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Name")
     * @var string
     */
    protected $name;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Position")
     * @var integer
     */
    protected $position;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("Surcharge")
     * @var FloatType
     */
    protected $surcharge;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("SurchargePercent")
     * @var FloatType
     */
    protected $surchargePercent;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("MinAmount")
     * @var FloatType
     */
    protected $minAmount;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("MaxAmount")
     * @var FloatType
     */
    protected $maxAmount;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PlattformName")
     * @var string
     */
    protected $plattformName;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("StandardForAll")
     * @var boolean
     */
    protected $standardForAll;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("Default")
     * @var boolean
     */
    protected $default;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Level")
     * @var int
     */
    protected $level;

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
     * @return int
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @return int
     */
    public function getPaymentFunctionID()
    {
        return $this->paymentFunctionID;
    }

    /**
     * @return string
     */
    public function getStandardText()
    {
        return $this->standardText;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return float
     */
    public function getSurcharge()
    {
        return $this->surcharge->getValue();
    }

    /**
     * @return float
     */
    public function getSurchargePercent()
    {
        return $this->surchargePercent->getValue();
    }

    /**
     * @return float
     */
    public function getMinAmount()
    {
        return $this->minAmount->getValue();
    }

    /**
     * @return float
     */
    public function getMaxAmount()
    {
        return $this->maxAmount->getValue();
    }

    /**
     * @return string
     */
    public function getPlattformName()
    {
        return $this->plattformName;
    }

    /**
     * @return boolean
     */
    public function isStandardForAll()
    {
        return $this->standardForAll;
    }

    /**
     * @return boolean
     */
    public function isDefault()
    {
        return $this->default;
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
     * @return string
     */
    public function getCountryGroupCountries()
    {
        return $this->countryGroupCountries;
    }
}
