<?php

namespace Ns\Afterbuy\Model;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class AbstractAdditionalDescriptionField
 */
abstract class AbstractAdditionalDescriptionField extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("FieldIDIdent")
     * @var int
     */
    protected $fieldIdIdent;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FieldNameIdent")
     * @var string
     */
    protected $fieldNameIdent;

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
    protected $fieldContent;

    /**
     * @return integer
     */
    public function getFieldIdIdent()
    {
        return $this->fieldIdIdent;
    }

    /**
     * @return string
     */
    public function getFieldNameIdent()
    {
        return $this->fieldNameIdent;
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
    public function getFieldContent()
    {
        return $this->fieldContent;
    }

}
