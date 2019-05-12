<?php

namespace Ns\Afterbuy\Model;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class AbstractAddCatalog
 */
abstract class AbstractAddCatalog extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("CatalogID")
     * @var int
     */
    protected $catalogID;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CatalogName")
     * @var string
     */
    protected $catalogName;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("CatalogLevel")
     * @var int
     */
    protected $catalogLevel;

    /**
     * @return integer
     */
    public function getCatalogID()
    {
        return $this->catalogID;
    }

    /**
     * @return string
     */
    public function getCatalogName()
    {
        return $this->catalogName;
    }

    /**
     * @return integer
     */
    public function getCatalogLevel()
    {
        return $this->catalogLevel;
    }

}
