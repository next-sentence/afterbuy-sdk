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
use Ns\Afterbuy\Model\FloatType;

/**
 * Class FloatHandler
 */
class FloatHandler implements SubscribingHandlerInterface
{
    /**
     * @var int
     */
    protected $defaultFormat;

    /**
     * @var string
     */
    protected $defaultLocale;

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

        foreach (array('json', 'xml', 'yml') as $format) {
            $methods[] = array(
                'type'      => 'Ns\Afterbuy\Model\FloatType',
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format'    => $format,
            );

            $methods[] = array(
                'type'      => 'Ns\Afterbuy\Model\FloatType',
                'format'    => $format,
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'method'    => 'serializeFloatType',
            );

        }

        return $methods;
    }

    /**
     * DateHandler constructor.
     *
     * @param int    $defaultFormat
     * @param string $defaultLocale
     * @param bool   $xmlCData
     */
    public function __construct($defaultFormat = \NumberFormatter::DECIMAL, $defaultLocale = 'de-DE', $xmlCData = true)
    {
        $this->defaultFormat = $defaultFormat;
        $this->defaultLocale = $defaultLocale;
        $this->xmlCData = $xmlCData;
    }

    /**
     * @param VisitorInterface $visitor
     * @param FloatType        $data
     * @param array            $type
     * @param Context          $context
     *
     * @return mixed|void
     */
    public function serializeFloatType(VisitorInterface $visitor, FloatType $data, array $type, Context $context)
    {
        $numberFormatter = new \NumberFormatter($this->getLocale($type), $this->getFormat($type));

        if ($visitor instanceof XmlSerializationVisitor && false === $this->xmlCData) {
            return $visitor->visitSimpleString($numberFormatter->format($data->getValue()), $type, $context);
        }

        return $visitor->visitString($numberFormatter->format($data->getValue()), $type, $context);
    }

    /**
     * @param XmlDeserializationVisitor $visitor
     * @param mixed                     $data
     * @param array                     $type
     *
     * @return float
     */
    public function deserializeFloatTypeFromXml(XmlDeserializationVisitor $visitor, $data, array $type)
    {
        $attributes = $data->attributes('xsi', true);
        if (isset($attributes['nil'][0]) && (string) $attributes['nil'][0] === 'true') {
            return null;
        }
        $numberFormatter = new \NumberFormatter($this->getLocale($type), $this->getFormat($type));

        return new FloatType($numberFormatter->parse($data));
    }

    /**
     * @param JsonDeserializationVisitor $visitor
     * @param mixed                      $data
     * @param array                      $type
     *
     * @return float
     */
    public function deserializeFloatTypeFromJson(JsonDeserializationVisitor $visitor, $data, array $type)
    {
        if (null === $data) {
            return null;
        }

        $numberFormatter = new \NumberFormatter($this->getLocale($type), $this->getFormat($type));

        return new FloatType($numberFormatter->parse($data));
    }

    /**
     * @param array $type
     *
     * @return int
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
    protected function getLocale(array $type)
    {
        return isset($type['params'][2]) ? $type['params'][2] : $this->defaultLocale;
    }
}