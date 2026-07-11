<?php

namespace IofXmlPhp\Model;

/**
 * Class representing LanguageStringType
 *
 * Defines a text that is given in a particular language.
 * XSD Type: LanguageString
 */
class LanguageStringType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The ISO 639-1 two-letter code of the language as stated in https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes.
     *
     * @var string $language
     */
    private $language = null;

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
     * Gets as language
     *
     * The ISO 639-1 two-letter code of the language as stated in https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * The ISO 639-1 two-letter code of the language as stated in https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }
}

