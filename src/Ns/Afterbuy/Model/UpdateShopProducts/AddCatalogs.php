<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;
use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

/**
 * Class AddCatalog
 */
class AddCatalogs extends AbstractModel
{

    const ACTION_UPDATE = 1;
    const ACTION_REPLACE = 2;
    const ACTION_DELETE = 3;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("UpdateAction")
     * @var int
     */
    protected $updateAction;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\UpdateShopProducts\AddCatalog>")
     * @Serializer\XmlList(inline=true, entry="AddCatalog")
     * @var AddCatalog[]
     */
    protected $catalogs;

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
     * @return AddCatalog[]
     */
    public function getCatalogs()
    {
        return $this->catalogs;
    }

    /**
     * @param AddCatalog[] $catalogs
     */
    public function setCatalogs(array $catalogs)
    {
        $this->catalogs = $catalogs;
    }

    /**
     * @param AddCatalog $catalog
     * @return $this
     */
    public function addCatalog($catalog)
    {
        $this->catalogs[] = $catalog;
        return $this;
    }

}

