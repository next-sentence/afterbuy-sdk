<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;
use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractAdditionalDescriptionField;

/**
 * Class AdditionalDescriptionField
 */
class AdditionalDescriptionField extends AbstractAdditionalDescriptionField
{
    /**
     * @param integer $fieldIdIdent
     * @return $this
     */
    public function setFieldIdIdent($fieldIdIdent)
    {
        $this->fieldIdIdent = $fieldIdIdent;
        return $this;
    }

    /**
     * @param string $fieldNameIdent
     * @return $this
     */
    public function setFieldNameIdent($fieldNameIdent)
    {
        $this->fieldNameIdent = $fieldNameIdent;
        return $this;
    }

    /**
     * @param string $fieldName
     * @return $this
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;
        return $this;
    }

    /**
     * @param string $fieldLabel
     * @return $this
     */
    public function setFieldLabel($fieldLabel)
    {
        $this->fieldLabel = $fieldLabel;
        return $this;
    }

    /**
     * @param string $fieldContent
     * @return $this
     */
    public function setFieldContent($fieldContent)
    {
        $this->fieldContent = $fieldContent;
        return $this;
    }
}

