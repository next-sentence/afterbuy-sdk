<?php

namespace Ns\Afterbuy\Model\GetShopProducts;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Feature
 */
class Feature
{

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ID")
     * @var int
     */
    protected $id;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Name")
     * @var string
     */
    protected $name;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Value")
     * @var string
     */
    protected $value;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
