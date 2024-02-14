<?php

namespace Ns\Afterbuy\Model\GetSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

class Tags extends AbstractModel
{

    /**
     * @Serializer\Type("array<string>")
     * @Serializer\XmlList(inline=true, entry="Tag")
     * @var array
     */
    protected $tag;

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tag;
    }

}
