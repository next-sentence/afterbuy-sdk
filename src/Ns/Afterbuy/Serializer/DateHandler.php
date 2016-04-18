<?php

namespace Ns\Afterbuy\Serializer;

use JMS\Serializer\Context;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\JsonDeserializationVisitor;
use JMS\Serializer\XmlDeserializationVisitor;
use JMS\Serializer\Exception\RuntimeException;
use JMS\Serializer\VisitorInterface;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\XmlSerializationVisitor;

/**
 * Class DateHandler
 */
class DateHandler implements SubscribingHandlerInterface
{
    /**
     * @var string
     */
    protected $defaultFormat;

    /**
     * @var \DateTimeZone
     */
    protected $defaultTimezone;

    /**
     * @var bool
     */
    protected $xmlCData;

    /**
     * @return array
     */
    public static function getSubscribingMethods()
    {
        $methods = array();
        $types = array('DateTime', 'DateInterval');

        foreach (array('json', 'xml', 'yml') as $format) {
            $methods[] = array(
                'type'      => 'DateTime',
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format'    => $format,
            );

            foreach ($types as $type) {
                $methods[] = array(
                    'type'      => $type,
                    'format'    => $format,
                    'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                    'method'    => 'serialize' . $type,
                );
            }
        }

        return $methods;
    }

    /**
     * DateHandler constructor.
     *
     * @param string $defaultFormat
     * @param string $defaultTimezone
     * @param bool   $xmlCData
     */
    public function __construct($defaultFormat = \DateTime::ISO8601, $defaultTimezone = 'UTC', $xmlCData = true)
    {
        $this->defaultFormat = $defaultFormat;
        $this->defaultTimezone = new \DateTimeZone($defaultTimezone);
        $this->xmlCData = $xmlCData;
    }

    /**
     * @param VisitorInterface $visitor
     * @param \DateTime        $date
     * @param array            $type
     * @param Context          $context
     *
     * @return mixed|void
     */
    public function serializeDateTime(VisitorInterface $visitor, \DateTime $date, array $type, Context $context)
    {
        if ($visitor instanceof XmlSerializationVisitor && false === $this->xmlCData) {
            return $visitor->visitSimpleString($date->format($this->getFormat($type)), $type, $context);
        }

        return $visitor->visitString($date->format($this->getFormat($type)), $type, $context);
    }

    /**
     * @param VisitorInterface $visitor
     * @param \DateInterval    $date
     * @param array            $type
     * @param Context          $context
     *
     * @return mixed|void
     */
    public function serializeDateInterval(VisitorInterface $visitor, \DateInterval $date, array $type, Context $context)
    {
        $iso8601DateIntervalString = $this->format($date);

        if ($visitor instanceof XmlSerializationVisitor && false === $this->xmlCData) {
            return $visitor->visitSimpleString($iso8601DateIntervalString, $type, $context);
        }

        return $visitor->visitString($iso8601DateIntervalString, $type, $context);
    }

    /**
     * @param XmlDeserializationVisitor $visitor
     * @param mixed                     $data
     * @param array                     $type
     *
     * @return \DateTime|null
     */
    public function deserializeDateTimeFromXml(XmlDeserializationVisitor $visitor, $data, array $type)
    {
        $attributes = $data->attributes('xsi', true);
        if (isset($attributes['nil'][0]) && (string) $attributes['nil'][0] === 'true') {
            return null;
        }

        return $this->parseDateTime($data, $type);
    }

    /**
     * @param JsonDeserializationVisitor $visitor
     * @param mixed                      $data
     * @param array                      $type
     *
     * @return \DateTime|null
     */
    public function deserializeDateTimeFromJson(JsonDeserializationVisitor $visitor, $data, array $type)
    {
        if (null === $data) {
            return null;
        }

        return $this->parseDateTime($data, $type);
    }

    /**
     * @param mixed $data
     * @param array $type
     *
     * @return \DateTime|null
     */
    protected function parseDateTime($data, array $type)
    {
        $data = trim($data);
        if (!$data) {
            return null;
        }

        $timezone = isset($type['params'][1]) ? new \DateTimeZone($type['params'][1]) : $this->defaultTimezone;
        $format = $this->getFormat($type);
        $datetime = \DateTime::createFromFormat($format, $data, $timezone);
        if (false !== $datetime) {
            return $datetime;
        }

        $fallback = $this->getFormatFallback($type);
        $datetime = \DateTime::createFromFormat($fallback, $data, $timezone);
        if (false === $datetime) {
            throw new RuntimeException(sprintf('Invalid datetime "%s", expected format %s.', $data, $format));
        }

        return $datetime;
    }

    /**
     * @param array $type
     *
     * @return string
     */
    protected function getFormat(array $type)
    {
        return isset($type['params'][0]) ? $type['params'][0] : $this->defaultFormat;
    }

    /**
     * @param array $type
     *
     * @return string
     */
    protected function getFormatFallback(array $type)
    {
        return isset($type['params'][2]) ? $type['params'][2] : $this->defaultFormat;
    }

    /**
     * @param \DateInterval $dateInterval
     *
     * @return string
     */
    public function format(\DateInterval $dateInterval)
    {
        $format = 'P';

        if (0 < $dateInterval->y) {
            $format .= $dateInterval->y . 'Y';
        }

        if (0 < $dateInterval->m) {
            $format .= $dateInterval->m . 'M';
        }

        if (0 < $dateInterval->d) {
            $format .= $dateInterval->d . 'D';
        }

        if (0 < $dateInterval->h || 0 < $dateInterval->i || 0 < $dateInterval->s) {
            $format .= 'T';
        }

        if (0 < $dateInterval->h) {
            $format .= $dateInterval->h . 'H';
        }

        if (0 < $dateInterval->i) {
            $format .= $dateInterval->i . 'M';
        }

        if (0 < $dateInterval->s) {
            $format .= $dateInterval->s . 'S';
        }

        return $format;
    }
}

