<?php

namespace Ns\Afterbuy\Model\GetSoldItems\Filter;

use \DateTime;
use Ns\Afterbuy\Model\AbstractFilter;

/**
 * Class DateFilter
 */
class DateFilter extends AbstractFilter
{
    /**
     * end date of the order
     */
    const FILTER_AUCTION_END_DATE = 'AuctionEndDate';

    /**
     * feedback date of the order
     */
    const FILTER_FEEDBACK_DATE = 'FeedbackDate';

    /**
     * payment date of the order
     */
    const FILTER_PAY_DATE = 'PayDate';

    /**
     * shipping date of the order
     */
    const FILTER_SHIPPING_DATE = 'ShippingDate';

    /**
     * invoice date of the order
     */
    const FILTER_INVOICE_DATE = 'InvoiceData';

    /**
     * last update of the order
     */
    const FILTER_MOD_DATE = 'ModDate';

    /**
     * date of the export to xml
     */
    const FILTER_XML_DATE = 'XmlDate';

    /**
     * date of mail dispatch
     */
    const FILTER_MAIL_DATE = 'MailDate';

    /**
     * reminder date
     */
    const FILTER_REMINDER_DATE = 'ReminderDate';

    /**
     * @param string $filterValue
     */
    public function __construct($filterValue)
    {
        parent::__construct('DateFilter');

        $this->filterValues['FilterValue'] = $filterValue;
    }

    /**
     * @return DateTime
     */
    public function getDateFrom()
    {
        return new DateTime($this->filterValues['DateFrom']);
    }

    /**
     * @param DateTime $dateFrom
     *
     * @return $this
     */
    public function setDateFrom($dateFrom)
    {
        $this->filterValues['DateFrom'] = $dateFrom->format('d.m.Y H:i:s');

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateTo()
    {
        return new DateTime($this->filterValues['DateTo']);
    }

    /**
     * @param DateTime $dateTo
     *
     * @return $this
     */
    public function setDateTo($dateTo)
    {
        $this->filterValues['DateTo'] = $dateTo->format('d.m.Y H:i:s');

        return $this;
    }
}
