<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;
use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

/**
 * Class AddAttributes
 */
class AddAttributes extends AbstractModel
{
    const ACTION_ADD = 1;
    const ACTION_UPDATE = 2;
    const ACTION_REPLACE = 3;
    const ACTION_DELETE = 4;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("UpdateAction")
     * @var int
     */
    protected $updateAction;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\UpdateShopProducts\AddAttribute>")
     * @Serializer\XmlList(inline=true, entry="AddAttribute")
     * @var AddAttribute[]
     */
    protected $attributes;

    /**
     * @return int
     */
    public function getUpdateAction()
    {
        return $this->updateAction;
    }

    /**
     * @param int $updateAction
     */
    public function setUpdateAction($updateAction)
    {
        $this->updateAction = $updateAction;
    }

    /**
     * @return AddAttribute[]
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param AddAttribute[] $attributes
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     * @param AddAttribute $attribute
     * @return $this
     */
    public function addAttribute($attribute)
    {
        $this->attributes[] = $attribute;
        return $this;
    }

}

