<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing RoleType
 *
 * A role defines a connection between a person and some kind of task, responsibility or engagement, e.g. being a course setter at an event.
 * XSD Type: Role
 */
class RoleType
{
    /**
     * The type of role that the person has.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * @var \Petrocki\IofXmlPhp\PersonType $person
     */
    private $person = null;

    /**
     * Gets as type
     *
     * The type of role that the person has.
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
     * The type of role that the person has.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as person
     *
     * @return \Petrocki\IofXmlPhp\PersonType
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets a new person
     *
     * @param \Petrocki\IofXmlPhp\PersonType $person
     * @return self
     */
    public function setPerson(\Petrocki\IofXmlPhp\PersonType $person)
    {
        $this->person = $person;
        return $this;
    }
}

