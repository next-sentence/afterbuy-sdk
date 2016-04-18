<?php

namespace Ns\Afterbuy\Model\GetSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractAddress;

/**
 * Class ShippingAddress
 */
class ShippingAddress extends AbstractAddress
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Street2")
     * @var string
     */
    protected $street2;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("StateOrProvince")
     * @var string
     */
    protected $stateOrProvince;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Phone")
     * @var string
     */
    protected $phone;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CountryISO")
     * @var string
     */
    protected $countryIso;

    /**
     * @return string
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * @return string
     */
    public function getStateOrProvince()
    {
        return $this->stateOrProvince;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getCountryIso()
    {
        return $this->countryIso;
    }
}
