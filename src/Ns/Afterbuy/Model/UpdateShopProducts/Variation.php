<?php
/**
 * Created by PhpStorm.
 * User: MySelV
 * Date: 30.03.2018
 * Time: 09:20
 */

namespace Ns\Afterbuy\Model\UpdateShopProducts;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractVariation;

class Variation extends AbstractVariation
{
    /**
     * @param $variationValues
     * @return $this
     */
    public function setVariationValues(array $variationValues)
    {
        $this->variationValues = $variationValues;
        return $this;
    }

    /**
     * @param $variationValue
     * @return $this
     */
    public function addVariationValue($variationValue)
    {
        $this->variationValues[] = $variationValue;
        return $this;
    }
}