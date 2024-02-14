<?php

namespace Ns\Afterbuy\Model\GetSoldItems\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class InvoiceNumberFilter
 */
class InvoiceNumberFilter extends AbstractFilter
{
    /**
     * @param int $invoiceNumber
     */
    public function __construct($invoiceNumber)
    {
        parent::__construct('InvoiceNumber');

        $this->filterValues['FilterValue'] = strval($invoiceNumber);
    }
}
