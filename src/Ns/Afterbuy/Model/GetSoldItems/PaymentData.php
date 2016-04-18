<?php

namespace Ns\Afterbuy\Model\GetSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

/**
 * Class PaymentData
 */
class PaymentData extends AbstractModel
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("BankCode")
     * @var string
     */
    protected $bankCode;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("AccountHolder")
     * @var string
     */
    protected $accountHolder;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("BankName")
     * @var string
     */
    protected $bankName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("AccountNumber")
     * @var string
     */
    protected $accountNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Iban")
     * @var string
     */
    protected $iban;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Bic")
     * @var string
     */
    protected $bic;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ReferenceNumber")
     * @var string
     */
    protected $referenceNumber;

    /**
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * @return string
     */
    public function getAccountHolder()
    {
        return $this->accountHolder;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->referenceNumber;
    }
}
