<?php

namespace Ns\Afterbuy\Model\GetShopCatalogs;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\Result as BaseResult;

/**
 * Class Result
 */
class Result extends BaseResult
{
    /**
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("HasMoreCatalogs")
     * @var bool
     */
    protected $hasMoreCatalogs;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("LastCatalogID")
     * @var int
     */
    protected $lastCatalogID;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetShopCatalogs\Catalog>")
     * @Serializer\SerializedName("Catalogs")
     * @Serializer\XmlList(entry="Catalog")
     * @var Catalog[]
     */
    protected $catalogs;

}
