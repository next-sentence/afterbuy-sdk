<?php

namespace Ns\Afterbuy\Model\GetStockInfo;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;
use Ns\Afterbuy\Model\AbstractRequest;
use Ns\Afterbuy\Model\AfterbuyGlobal;
use Ns\Afterbuy\Model\GetStockInfo\Filter\AbstractFilter;

/**
 * Class GetStockInfoRequest
 *
 * @Serializer\XmlRoot("Request")
 */
class GetStockInfoRequest extends AbstractRequest
{
    const CALL_NAME = 'GetStockInfo';

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\AbstractModel>")
     * @Serializer\XmlList(entry="Product")
     * @Serializer\SerializedName("Products")
     * @var AbstractModel[]
     */
    protected $filters;

    /**
     * @param AfterbuyGlobal $afterbuyGlobal
     */
    public function __construct(AfterbuyGlobal $afterbuyGlobal)
    {
        parent::__construct($afterbuyGlobal);

        $this->setCallName(self::CALL_NAME);
    }

    /**
     * @return AbstractModel
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * @param AbstractModel[] $filters
     *
     * @return $this
     */
    public function setFilters(array $filters)
    {
        $this->filters = $filters;

        return $this;
    }

    /**
     * @param AbstractModel $filter
     *
     * @return $this
     */
    public function addFilter(AbstractModel $filter)
    {
        $this->filters[] = $filter;

        return $this;
    }
}
