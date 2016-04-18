<?php

namespace Ns\Afterbuy\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class AbstractAddress
 */
abstract class AbstractAddress extends AbstractModel
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FirstName")
     * @var string
     */
    protected $firstName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("LastName")
     * @var string
     */
    protected $lastName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Company")
     * @var string
     */
    protected $company;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Street")
     * @var string
     */
    protected $street;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PostalCode")
     * @var string
     */
    protected $postalCode;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("City")
     * @var string
     */
    protected $city;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Country")
     * @var string
     */
    protected $country;

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
}
