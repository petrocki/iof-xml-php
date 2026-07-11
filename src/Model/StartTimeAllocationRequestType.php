<?php

namespace IofXmlPhp\Model;

/**
 * Class representing StartTimeAllocationRequestType
 *
 * Used to state start time allocation requests. It consists of a possible reference Organisation or Person and the allocation request, e.g. late start or grouped with the reference Organisation/Person. This way it is possible to state requests to the event organizer so that e.g. all members of an organisation has start times close to each other - or parents have start times far from each other. It is totally up to the event software and organizers whether they will support such requests.
 * XSD Type: StartTimeAllocationRequest
 */
class StartTimeAllocationRequestType
{
    /**
     * The type of start time allocation request.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * The reference organisation for the start time allocation request.
     *
     * @var \IofXmlPhp\Model\OrganisationType $organisation
     */
    private $organisation = null;

    /**
     * The reference person for the start time allocation request.
     *
     * @var \IofXmlPhp\Model\PersonType $person
     */
    private $person = null;

    /**
     * Gets as type
     *
     * The type of start time allocation request.
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
     * The type of start time allocation request.
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
     * Gets as organisation
     *
     * The reference organisation for the start time allocation request.
     *
     * @return \IofXmlPhp\Model\OrganisationType
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Sets a new organisation
     *
     * The reference organisation for the start time allocation request.
     *
     * @param \IofXmlPhp\Model\OrganisationType $organisation
     * @return self
     */
    public function setOrganisation(?\IofXmlPhp\Model\OrganisationType $organisation = null)
    {
        $this->organisation = $organisation;
        return $this;
    }

    /**
     * Gets as person
     *
     * The reference person for the start time allocation request.
     *
     * @return \IofXmlPhp\Model\PersonType
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets a new person
     *
     * The reference person for the start time allocation request.
     *
     * @param \IofXmlPhp\Model\PersonType $person
     * @return self
     */
    public function setPerson(?\IofXmlPhp\Model\PersonType $person = null)
    {
        $this->person = $person;
        return $this;
    }
}

