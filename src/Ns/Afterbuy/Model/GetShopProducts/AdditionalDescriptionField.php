<?php

namespace Ns\Afterbuy\Model\GetShopProducts;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class AdditionalDescriptionField
 */
class AdditionalDescriptionField
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("FieldID")
     * @var int
     */
    protected $fieldId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FieldName")
     * @var string
     */
    protected $fieldName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FieldLabel")
     * @var string
     */
    protected $fieldLabel;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FieldContent")
     * @var string
     */
    protected $fieldIContent;

    /**
     * @return int
     */
    public function getFieldId()
    {
        return $this->fieldId;
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * @return string
     */
    public function getFieldLabel()
    {
        return $this->fieldLabel;
    }

    /**
     * @return string
     */
    public function getFieldIContent()
    {
        return $this->fieldIContent;
    }
}
