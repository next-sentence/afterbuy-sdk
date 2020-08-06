<?php

namespace Ns\Afterbuy\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Result
 */
class Result extends AbstractModel
{
    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\Error>")
     * @Serializer\SerializedName("ErrorList")
     * @Serializer\XmlList(entry="Error")
     * @var Error[]
     */
    protected $errors;

    /**
     * @return Error[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\Warning>")
     * @Serializer\SerializedName("WarningList")
     * @Serializer\XmlList(entry="Warning")
     * @var Warning[]
     */
    protected $warnings;

    /**
     * @return Warning[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

	/**
	 *
	 * @param string $name
	 * @return mixed|null
	 */
	public function __get( $name ) {
		if( property_exists( $this, $name ) ) {
			return $this->$name;
		}
		return null;
	}
}
