<?php

namespace Ns\Afterbuy\Model\UpdateShopProducts;
use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractProductPicture;

/**
 * Class ProductPicture
 */
class ProductPicture extends AbstractProductPicture
{
    /**
     * @param integer $nr
     * @return $this
     */
    public function setNr($nr)
    {
        $this->nr = $nr;
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

