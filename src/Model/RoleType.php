<?php

namespace Petrocki\IofXmlPhp\Model;

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
     * @var \Petrocki\IofXmlPhp\Model\PersonType $person
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
     * @return \Petrocki\IofXmlPhp\Model\PersonType
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets a new person
     *
     * @param \Petrocki\IofXmlPhp\Model\PersonType $person
     * @return self
     */
    public function setPerson(\Petrocki\IofXmlPhp\Model\PersonType $person)
    {
        $this->person = $person;
        return $this;
    }
}

