<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;
use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;
use Ns\Afterbuy\Model\GetShopProducts\AddBaseProduct;

/**
 * Class AddBaseProducts
 */
class AddBaseProducts extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("UpdateAction")
     * @var int
     */
    protected $updateAction;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\UpdateShopProducts\AddBaseProduct>")
     * @Serializer\XmlList(inline=true, entry="AddBaseProduct")
     * @var AddBaseProduct[]
     */
    protected $baseProducts;

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
     * @return AddBaseProduct[]
     */
    public function getBaseProducts()
    {
        return $this->baseProducts;
    }

    /**
     * @param AddBaseProduct[] $baseProducts
     */
    public function setBaseProducts(array $baseProducts)
    {
        $this->baseProducts = $baseProducts;
    }

    /**
     * @param AddBaseProduct $baseProduct
     * @return $this
     */
    public function addBaseProduct($baseProduct)
    {
        $this->baseProducts[] = $baseProduct;
        return $this;
    }

}

