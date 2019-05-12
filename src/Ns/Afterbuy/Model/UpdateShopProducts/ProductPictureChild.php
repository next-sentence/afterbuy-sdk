<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;
use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractProductPictureChild;

/**
 * Class ProductPicture
 */
class ProductPictureChild extends AbstractProductPictureChild
{
    /**
     * @param integer $type
     * @return $this
     */
    public function setType($type)
    {
        $this->typ = $type;
        return $this;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @param string $altText
     * @return $this
     */
    public function setAltText($altText)
    {
        $this->altText = $altText;
        return $this;
    }
}

