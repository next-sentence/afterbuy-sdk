<?php

namespace Ns\Afterbuy\Model;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class AbstractProductPictureChild
 */
abstract class AbstractProductPictureChild extends AbstractModel
{
    const TYPE_THUMBNAIL = 1;
    const TYPE_ZOOM = 2;
    const TYPE_LIST = 3;

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
     * @return integer
     */
    public function getNr()
    {
        return $this->nr;
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

}
