<?php

namespace Ns\Afterbuy\Model\GetSoldItems;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class BillingAddress
 */
class BillingAddress extends ShippingAddress
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("AfterbuyUserID")
     * @var string
     */
    protected $afterbuyUserId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("AfterbuyUserIDAlt")
     * @var string
     */
    protected $afterbuyUserIdAlt;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("UserIDPlattform")
     * @var string
     */
    protected $userIdPlatform;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Title")
     * @var string
     */
    protected $title;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Fax")
     * @var string
     */
    protected $fax;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Mail")
     * @var string
     */
    protected $mail;

    /**
     * @Serializer\Type("integer")
     * @Serializer\Accessor(setter="setMerchantFromInteger")
     * @Serializer\SerializedName("IsMerchant")
     * @var bool
     */
    protected $merchant;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("TaxIDNumber")
     * @var string
     */
    protected $taxIdNumber;

    /**
     * @param int $value
     */
    public function setMerchantFromInteger($value)
    {
        $this->merchant = $this->setBooleanFromInteger($value);
    }

    /**
     * @return string
     */
    public function getAfterbuyUserId()
    {
        return $this->afterbuyUserId;
    }

    /**
     * @return string
     */
    public function getAfterbuyUserIdAlt()
    {
        return $this->afterbuyUserIdAlt;
    }

    /**
     * @return string
     */
    public function getUserIdPlatform()
    {
        return $this->userIdPlatform;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return bool
     */
    public function isMerchant()
    {
        return $this->merchant;
    }

    /**
     * @return string
     */
    public function getTaxIdNumber()
    {
        return $this->taxIdNumber;
    }
}
