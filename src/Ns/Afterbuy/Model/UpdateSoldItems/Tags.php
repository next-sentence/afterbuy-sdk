<?php

namespace Ns\Afterbuy\Model\UpdateSoldItems;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractModel;

class Tags extends AbstractModel
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
     * @Serializer\XmlList(inline=true, entry="Tag")
     * @var array
     */
    protected $tag;

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
    public function getTags()
    {
        return $this->tag;
    }

    /**
     * @param array $tags
     * @return $this
     */
    public function setTags(array $tags)
    {
        $this->tag = $tags;
        return $this;
    }

    /**
     * @param string $tag
     * @return $this
     */
    public function addTag($tag)
    {
        $this->tag[] = $tag;
        return $this;
    }

}
