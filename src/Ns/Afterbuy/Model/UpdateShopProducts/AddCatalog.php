<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;
use Ns\Afterbuy\Model\AbstractAddCatalog;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class AddCatalog
 */
class AddCatalog extends AbstractAddCatalog
{
    /**
     * @param integer $catalogID
     * @return $this
     */
    public function setCatalogID($catalogID)
    {
        $this->catalogID = $catalogID;
        return $this;
    }

    /**
     * @param integer $catalogLevel
     * @return $this
     */
    public function setCatalogLevel($catalogLevel)
    {
        $this->catalogLevel = $catalogLevel;
        return $this;
    }

    /**
     * @param string $catalogName
     * @return $this
     */
    public function setCatalogName($catalogName)
    {
        $this->catalogName = $catalogName;
        return $this;
    }
}

