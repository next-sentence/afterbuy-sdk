<?php
/**
 * Created by PhpStorm.
 * User: MySelV
 * Date: 30.03.2018
 * Time: 09:20
 */

namespace Ns\Afterbuy\Model\UpdateShopProducts;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

class Skus extends AbstractModel
{

    const ACTION_ADD = 1;
    const ACTION_REPLACE = 2;
    const ACTION_DELETE = 3;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("UpdateAction")
     * @var int
     */
    protected $updateAction;

    /**
     * @Serializer\Type("array<string>")
     * @Serializer\XmlList(inline=true, entry="Sku")
     * @var array
     */
    protected $sku;

    /**
     * @return int
     */
    public function getUpdateAction()
    {
        return $this->updateAction;
    }

    /**
     * @param int $updateAction
     * @return $this
     */
    public function setUpdateAction($updateAction)
    {
        $this->updateAction = $updateAction;
        return $this;
    }

    /**
     * @return array
     */
    public function getSkus()
    {
        return $this->sku;
    }

    /**
     * @param array $skus
     * @return $this
     */
    public function setSkus(array $skus)
    {
        $this->sku = $skus;
        return $this;
    }

    /**
     * @param string $sku
     * @return $this
     */
    public function addSku($sku)
    {
        $this->sku[] = $sku;
        return $this;
    }

}