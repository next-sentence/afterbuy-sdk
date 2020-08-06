<?php

namespace Ns\Afterbuy\Model;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\FloatType;

/**
 * Class AbstractProductIdent
 */
abstract class AbstractProductIdent extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getProductInsertAsInteger", setter="setProductInsertAsInteger")
     * @Serializer\SerializedName("ProductInsert")
     * @var bool
     */
    protected $productInsert;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("BaseProductType")
     * @var int
     */
    protected $baseProductType;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("UserProductID")
     * @var string
     */
    protected $userProductID;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ProductID")
     * @var int
     */
    protected $productID;

    /**
     * @Serializer\Type("Ns\Afterbuy\Model\FloatType")
     * @Serializer\SerializedName("Anr")
     * @var FloatType
     */
    protected $anr;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("EAN")
     * @var string
     */
    protected $ean;

    /**
     * @return int
     */
    public function getProductInsertAsInteger()
    {
        return $this->getBooleanAsInteger($this->productInsert);
    }

    /**
     * @param int $value
     */
    public function setProductInsertAsInteger($value)
    {
        $this->productInsert = $this->setBooleanFromInteger($value);
    }

    /**
     * @return string
     */
    public function getBaseProductType()
    {
        return $this->baseProductType;
    }

    /**
     * @return FloatType
     */
    public function getAnr()
    {
        return $this->anr;
    }

    /**
     * @return string
     */
    public function getEAN()
    {
        return $this->ean;
    }

    /**
     * @return integer
     */
    public function getProductID()
    {
        return $this->productID;
    }

}
