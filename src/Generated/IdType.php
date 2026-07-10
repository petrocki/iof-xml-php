<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing IdType
 *
 * Identifier element, used extensively. The id should be known and common for both systems taking part in the data exchange.
 * XSD Type: Id
 */
class IdType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The issuer of the identity, e.g. World Ranking List.
     *
     * @var string $type
     */
    private $type = null;

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
     * Gets as type
     *
     * The issuer of the identity, e.g. World Ranking List.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The issuer of the identity, e.g. World Ranking List.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}

