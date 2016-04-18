<?php

namespace Ns\Afterbuy\Model\GetShopCatalogs;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

/**
 * Class Catalog
 */
class Catalog extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("CatalogID")
     * @var integer
     */
    protected $catalogId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Name")
     * @var string
     */
    protected $name;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Description")
     * @var string
     */
    protected $description;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ParentID")
     * @var integer
     */
    protected $parentId;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Level")
     * @var integer
     */
    protected $level;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Position")
     * @var integer
     */
    protected $position;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("AdditionalText")
     * @var string
     */
    protected $additionalText;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("Show")
     * @var boolean
     */
    protected $show;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Picture1")
     * @var string
     */
    protected $picture1;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Picture2")
     * @var string
     */
    protected $picture2;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("TitlePicture")
     * @var string
     */
    protected $titlePicture;

    /**
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("CatalogProducts")
     * @Serializer\XmlList(entry="ProductID")
     * @var array
     */
    protected $catalogProducts;

    /**
     * @return int
     */
    public function getCatalogId()
    {
        return $this->catalogId;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return string
     */
    public function getAdditionalText()
    {
        return $this->additionalText;
    }

    /**
     * @return boolean
     */
    public function isShow()
    {
        return $this->show;
    }

    /**
     * @return string
     */
    public function getPicture1()
    {
        return $this->picture1;
    }

    /**
     * @return string
     */
    public function getPicture2()
    {
        return $this->picture2;
    }

    /**
     * @return string
     */
    public function getTitlePicture()
    {
        return $this->titlePicture;
    }

    /**
     * @return array
     */
    public function getCatalogProducts()
    {
        return $this->catalogProducts;
    }
}
