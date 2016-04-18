<?php

namespace Ns\Afterbuy\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class AfterbuyGlobal
 */
class AfterbuyGlobal extends AbstractModel
{
    /**
     * display process data only
     */
    const DETAIL_LEVEL_PROCESS_DATA = 0;

    /**
     * display payment data only
     */
    const DETAIL_LEVEL_PAYMENT_DATA = 2;

    /**
     * display buyer data only
     */
    const DETAIL_LEVEL_BUYER_DATA = 4;

    /**
     * display articles data only
     */
    const DETAIL_LEVEL_ARTICLES_DATA = 8;

    /**
     * display shipping data only
     */
    const DETAIL_LEVEL_SHIPPING_DATA = 16;

    /**
     * display articles data and custom attributes only
     */
    const DETAIL_LEVEL_CUSTOM_ATTRIBUTES = 32;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("PartnerID")
     * @var int
     */
    protected $partnerId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PartnerPassword")
     * @var string
     */
    protected $partnerPassword;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("UserID")
     * @var string
     */
    protected $userId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("UserPassword")
     * @var string
     */
    protected $userPassword;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CallName")
     * @var string
     */
    protected $callName;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("DetailLevel")
     * @var int
     */
    protected $detailLevel;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ErrorLanguage")
     * @var string
     */
    protected $errorLanguage;

    /**
     * @param string $userId
     * @param string $userPassword
     * @param int    $partnerId
     * @param string $partnerPassword
     * @param int    $errorLanguage
     */
    public function __construct($userId, $userPassword, $partnerId, $partnerPassword, $errorLanguage)
    {
        $this->userId = $userId;
        $this->userPassword = $userPassword;
        $this->partnerId = $partnerId;
        $this->partnerPassword = $partnerPassword;
        $this->errorLanguage = $errorLanguage;
        $this->detailLevel = self::DETAIL_LEVEL_PROCESS_DATA;
    }

    /**
     * @return int
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * @param int $partnerId
     *
     * @return $this
     */
    public function setPartnerId($partnerId)
    {
        $this->partnerId = $partnerId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPartnerPassword()
    {
        return $this->partnerPassword;
    }

    /**
     * @param string $partnerPassword
     *
     * @return $this
     */
    public function setPartnerPassword($partnerPassword)
    {
        $this->partnerPassword = $partnerPassword;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * @param string $userPassword
     *
     * @return $this
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    /**
     * @return string
     */
    public function getCallName()
    {
        return $this->callName;
    }

    /**
     * @param string $callName
     *
     * @return $this
     */
    public function setCallName($callName)
    {
        $this->callName = $callName;

        return $this;
    }

    /**
     * @return int
     */
    public function getDetailLevel()
    {
        return $this->detailLevel;
    }

    /**
     * @param int $detailLevel
     *
     * @return $this
     */
    public function setDetailLevel($detailLevel)
    {
        $this->detailLevel = $detailLevel;

        return $this;
    }

    /**
     * @return string
     */
    public function getErrorLanguage()
    {
        return $this->errorLanguage;
    }

    /**
     * @param string $errorLanguage
     *
     * @return $this
     */
    public function setErrorLanguage($errorLanguage)
    {
        $this->errorLanguage = $errorLanguage;

        return $this;
    }
}
