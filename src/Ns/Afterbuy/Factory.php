<?php

namespace Ns\Afterbuy;

use Ns\Afterbuy\Client\Request;
use Monolog\Logger;

/**
 * Class Factory
 */
class Factory
{
    /**
     * @param array $config
     * @return Request
     */
    public function createRequest(array $config)
    {
        return new Request(
            $config['userId'],
            $config['userPass'],
            $config['partnerId'],
            $config['partnerPass'],
            $config['errorLang'],
            $config['doctypeWhitelist'] ?? []
        );
    }
}
