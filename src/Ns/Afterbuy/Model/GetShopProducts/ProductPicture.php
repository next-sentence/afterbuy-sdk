<?php

namespace Ns\Afterbuy\Model\GetShopProducts;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ProductPicture
 */
class ProductPicture
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Nr")
     * @var int
     */
    protected $nr;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Typ")
     * @var int
     */
    protected $typ;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Url")
     * @var string
     */
    protected $url;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("AltText")
     * @var string
     */
    protected $altText;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetShopProducts\ProductPicture>")
     * @Serializer\SerializedName("Childs")
     * @Serializer\XmlList(entry="ProductPicture")
     * @var ProductPicture[]
     */
    protected $childs;

    /**
     * @return int
     */
    public function getNr()
    {
        return $this->nr;
    }

    /**
     * @return int
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getAltText()
    {
        return $this->altText;
    }

    /**
     * @return ProductPicture[]
     */
    public function getChilds()
    {
        return $this->childs;
    }
}
