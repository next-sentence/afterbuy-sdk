<?php

namespace Ns\Afterbuy\Model\UpdateSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractAddress;

/**
 * Class ShippingAddress
 */
class ShippingAddress extends AbstractAddress
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getUseShippingAddressAsInteger", setter="setUseShippingAddressFromInteger")
     * @Serializer\SerializedName("UseShippingAddress")
     * @var bool
     */
    protected $useShippingAddress;

    /**
     * @return int
     */
    public function getUseShippingAddressAsInteger()
    {
        return $this->getBooleanAsInteger($this->useShippingAddress);
    }

    /**
     * @param int $value
     */
    public function setUseShippingAddressFromInteger($value)
    {
        $this->useShippingAddress = $this->setBooleanFromInteger($value);
    }

    /**
     * @return bool
     */
    public function isUseShippingAddress()
    {
        return $this->useShippingAddress;
    }

    /**
     * @param bool $useShippingAddress
     *
     * @return $this
     */
    public function setUseShippingAddress($useShippingAddress)
    {
        $this->useShippingAddress = $useShippingAddress;

        return $this;
    }

    /**
     * @param string $firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @param string $lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @param string $company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @param string $street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @param string $postalCode
     *
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }
}
