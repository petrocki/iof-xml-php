<?php

namespace Petrocki\IofXmlPhp\ServiceRequestList;

use Petrocki\IofXmlPhp\BaseMessageElementType;

/**
 * Class representing ServiceRequestListAType
 */
class ServiceRequestListAType extends BaseMessageElementType
{
    /**
     * The event that the service requests are valid for.
     *
     * @var \Petrocki\IofXmlPhp\EventType $event
     */
    private $event = null;

    /**
     * Service requests made by organisations.
     *
     * @var \Petrocki\IofXmlPhp\OrganisationServiceRequestType[] $organisationServiceRequest
     */
    private $organisationServiceRequest = [
        
    ];

    /**
     * Service requests made by persons.
     *
     * @var \Petrocki\IofXmlPhp\PersonServiceRequestType[] $personServiceRequest
     */
    private $personServiceRequest = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as event
     *
     * The event that the service requests are valid for.
     *
     * @return \Petrocki\IofXmlPhp\EventType
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * The event that the service requests are valid for.
     *
     * @param \Petrocki\IofXmlPhp\EventType $event
     * @return self
     */
    public function setEvent(\Petrocki\IofXmlPhp\EventType $event)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Adds as organisationServiceRequest
     *
     * Service requests made by organisations.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\OrganisationServiceRequestType $organisationServiceRequest
     */
    public function addToOrganisationServiceRequest(\Petrocki\IofXmlPhp\OrganisationServiceRequestType $organisationServiceRequest)
    {
        $this->organisationServiceRequest[] = $organisationServiceRequest;
        return $this;
    }

    /**
     * isset organisationServiceRequest
     *
     * Service requests made by organisations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrganisationServiceRequest($index)
    {
        return isset($this->organisationServiceRequest[$index]);
    }

    /**
     * unset organisationServiceRequest
     *
     * Service requests made by organisations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrganisationServiceRequest($index)
    {
        unset($this->organisationServiceRequest[$index]);
    }

    /**
     * Gets as organisationServiceRequest
     *
     * Service requests made by organisations.
     *
     * @return \Petrocki\IofXmlPhp\OrganisationServiceRequestType[]
     */
    public function getOrganisationServiceRequest()
    {
        return $this->organisationServiceRequest;
    }

    /**
     * Sets a new organisationServiceRequest
     *
     * Service requests made by organisations.
     *
     * @param \Petrocki\IofXmlPhp\OrganisationServiceRequestType[] $organisationServiceRequest
     * @return self
     */
    public function setOrganisationServiceRequest(?array $organisationServiceRequest = null)
    {
        $this->organisationServiceRequest = $organisationServiceRequest;
        return $this;
    }

    /**
     * Adds as personServiceRequest
     *
     * Service requests made by persons.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\PersonServiceRequestType $personServiceRequest
     */
    public function addToPersonServiceRequest(\Petrocki\IofXmlPhp\PersonServiceRequestType $personServiceRequest)
    {
        $this->personServiceRequest[] = $personServiceRequest;
        return $this;
    }

    /**
     * isset personServiceRequest
     *
     * Service requests made by persons.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPersonServiceRequest($index)
    {
        return isset($this->personServiceRequest[$index]);
    }

    /**
     * unset personServiceRequest
     *
     * Service requests made by persons.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPersonServiceRequest($index)
    {
        unset($this->personServiceRequest[$index]);
    }

    /**
     * Gets as personServiceRequest
     *
     * Service requests made by persons.
     *
     * @return \Petrocki\IofXmlPhp\PersonServiceRequestType[]
     */
    public function getPersonServiceRequest()
    {
        return $this->personServiceRequest;
    }

    /**
     * Sets a new personServiceRequest
     *
     * Service requests made by persons.
     *
     * @param \Petrocki\IofXmlPhp\PersonServiceRequestType[] $personServiceRequest
     * @return self
     */
    public function setPersonServiceRequest(?array $personServiceRequest = null)
    {
        $this->personServiceRequest = $personServiceRequest;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * Container element for custom elements from other schemas.
     *
     * @return \Petrocki\IofXmlPhp\ExtensionsType
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * Container element for custom elements from other schemas.
     *
     * @param \Petrocki\IofXmlPhp\ExtensionsType $extensions
     * @return self
     */
    public function setExtensions(?\Petrocki\IofXmlPhp\ExtensionsType $extensions = null)
    {
        $this->extensions = $extensions;
        return $this;
    }
}

