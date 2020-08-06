<?php

namespace Ns\Afterbuy\Model;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class AbstractProductPicture
 */
abstract class AbstractProductPicture extends AbstractModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Nr")
     * @var int
     */
    protected $nr;

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
