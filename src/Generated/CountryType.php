<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing CountryType
 *
 * Defines the name of the country.
 * XSD Type: Country
 */
class CountryType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The International Olympic Committee's 3-letter code of the country as stated in https://en.wikipedia.org/wiki/List_of_IOC_country_codes. Note that several of the IOC codes are different from the standard ISO 3166-1 alpha-3 codes.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as code
     *
     * The International Olympic Committee's 3-letter code of the country as stated in https://en.wikipedia.org/wiki/List_of_IOC_country_codes. Note that several of the IOC codes are different from the standard ISO 3166-1 alpha-3 codes.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The International Olympic Committee's 3-letter code of the country as stated in https://en.wikipedia.org/wiki/List_of_IOC_country_codes. Note that several of the IOC codes are different from the standard ISO 3166-1 alpha-3 codes.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
}

