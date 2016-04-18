<?php

namespace Ns\Afterbuy\Model\GetSoldItems\Filter;

use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class DefaultFilter
 */
class DefaultFilter extends AbstractFilter
{
    /**
     * new orders: no feedback date set, no initial contact email sent, no payment date set
     */
    const FILTER_NEW_AUCTIONS = 'NewAuctions';

    /**
     * completed orders: payment date set, shipping date set, paid in full
     */
    const FILTER_COMPLETED_AUCTIONS = 'CompletedAuctions';

    /**
     * paid orders: payment date set, paid in full
     */
    const FILTER_PAID_AUCTIONS = 'PaidAuctions';

    /**
     * orders with printed invoices
     */
    const FILTER_INVOICE_PRINTED = 'InvoicePrinted';

    /**
     * no xml date set
     */
    const FILTER_NO_XML_DATE = 'NoXMLDate';

    /**
     * @param string $filterValue
     */
    public function __construct($filterValue)
    {
        parent::__construct('DefaultFilter');

        $this->filterValues['FilterValue'] = $filterValue;
    }
}
