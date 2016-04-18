<?php

namespace Ns\Afterbuy\Model;

/**
 * Class AbstractModel
 */
class AbstractModel
{
    /**
     * @param int $value
     *
     * @return bool|null
     */
    public function setBooleanFromInteger($value)
    {
        if (is_null($value)) {
            return null;
        }

        return (bool)$value;
    }

    /**
     * @param bool $value
     *
     * @return int|null
     */
    public function getBooleanAsInteger($value)
    {
        if (is_null($value)) {
            return null;
        }

        return $value ? 1 : 0;
    }
}
