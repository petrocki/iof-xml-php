<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing PersonNameType
 *
 *
 * XSD Type: PersonName
 */
class PersonNameType
{
    /**
     * @var string $family
     */
    private $family = null;

    /**
     * @var string $given
     */
    private $given = null;

    /**
     * Gets as family
     *
     * @return string
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * Sets a new family
     *
     * @param string $family
     * @return self
     */
    public function setFamily($family)
    {
        $this->family = $family;
        return $this;
    }

    /**
     * Gets as given
     *
     * @return string
     */
    public function getGiven()
    {
        return $this->given;
    }

    /**
     * Sets a new given
     *
     * @param string $given
     * @return self
     */
    public function setGiven($given)
    {
        $this->given = $given;
        return $this;
    }
}

