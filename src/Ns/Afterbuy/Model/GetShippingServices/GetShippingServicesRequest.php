<?php

namespace Ns\Afterbuy\Model\GetShippingServices;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\AbstractRequest;
use Ns\Afterbuy\Model\AfterbuyGlobal;

/**
 * Class GetShippingServicesRequest
 *
 * @Serializer\XmlRoot("Request")
 */
class GetShippingServicesRequest extends AbstractRequest
{
    const CALL_NAME = 'GetShippingServices';

    /**
     * @param AfterbuyGlobal $afterbuyGlobal
     */
    public function __construct(AfterbuyGlobal $afterbuyGlobal)
    {
        parent::__construct($afterbuyGlobal);

        $this->setCallName(self::CALL_NAME);
    }
}
