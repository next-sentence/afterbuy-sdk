<?php

namespace Ns\Afterbuy\Model\GetShopProducts;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

/**
 * Class PaginationResult
 */
class PaginationResult
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("TotalNumberOfEntries")
     * @var int
     */
    protected $totalNumberOfEntries;
    
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("TotalNumberOfPages")
     * @var int
     */
    protected $totalNumberOfPages;
    
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ItemsPerPage")
     * @var int
     */
    protected $itemsPerPage;
    
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("PageNumber")
     * @var int
     */
    protected $pageNumber;


    /**
     * @return int
     */
    public function getTotalNumberOfEntries()
    {
        return $this->totalNumberOfEntries;
    }

    /**
     * @return int
     */
    public function getTotalNumberOfPages()
    {
        return $this->totalNumberOfPages;
    }

    /**
     * @return int
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }
}
