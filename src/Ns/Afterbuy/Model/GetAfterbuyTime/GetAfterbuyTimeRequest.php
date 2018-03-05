<?php

namespace Ns\Afterbuy\Model\GetAfterbuyTime;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractRequest;
use Ns\Afterbuy\Model\AfterbuyGlobal;
use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class GetAfterbuyTimeRequest
 *
 * @Serializer\XmlRoot("Request")
 */
class GetAfterbuyTimeRequest extends AbstractRequest
{

    const CALL_NAME = 'GetAfterbuyTime';

    /**
     * @param AfterbuyGlobal $afterbuyGlobal
     */
    public function __construct( AfterbuyGlobal $afterbuyGlobal)
    {
        parent::__construct($afterbuyGlobal);
        $this->setCallName(self::CALL_NAME);
    }
}
