<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing OrganisationServiceRequestType
 *
 * Service requests made by an organisation.
 * XSD Type: OrganisationServiceRequest
 */
class OrganisationServiceRequestType
{
    /**
     * The organisation that made the requests.
     *
     * @var \Petrocki\IofXmlPhp\OrganisationType $organisation
     */
    private $organisation = null;

    /**
     * The service requests that the organisation made.
     *
     * @var \Petrocki\IofXmlPhp\ServiceRequestType[] $serviceRequest
     */
    private $serviceRequest = [
        
    ];

    /**
     * The service requests made by persons representing the organisation.
     *
     * @var \Petrocki\IofXmlPhp\PersonServiceRequestType[] $personServiceRequest
     */
    private $personServiceRequest = [
        
    ];

    /**
     * Gets as organisation
     *
     * The organisation that made the requests.
     *
     * @return \Petrocki\IofXmlPhp\OrganisationType
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Sets a new organisation
     *
     * The organisation that made the requests.
     *
     * @param \Petrocki\IofXmlPhp\OrganisationType $organisation
     * @return self
     */
    public function setOrganisation(\Petrocki\IofXmlPhp\OrganisationType $organisation)
    {
        $this->organisation = $organisation;
        return $this;
    }

    /**
     * Adds as serviceRequest
     *
     * The service requests that the organisation made.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\ServiceRequestType $serviceRequest
     */
    public function addToServiceRequest(\Petrocki\IofXmlPhp\ServiceRequestType $serviceRequest)
    {
        $this->serviceRequest[] = $serviceRequest;
        return $this;
    }

    /**
     * isset serviceRequest
     *
     * The service requests that the organisation made.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceRequest($index)
    {
        return isset($this->serviceRequest[$index]);
    }

    /**
     * unset serviceRequest
     *
     * The service requests that the organisation made.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceRequest($index)
    {
        unset($this->serviceRequest[$index]);
    }

    /**
     * Gets as serviceRequest
     *
     * The service requests that the organisation made.
     *
     * @return \Petrocki\IofXmlPhp\ServiceRequestType[]
     */
    public function getServiceRequest()
    {
        return $this->serviceRequest;
    }

    /**
     * Sets a new serviceRequest
     *
     * The service requests that the organisation made.
     *
     * @param \Petrocki\IofXmlPhp\ServiceRequestType[] $serviceRequest
     * @return self
     */
    public function setServiceRequest(?array $serviceRequest = null)
    {
        $this->serviceRequest = $serviceRequest;
        return $this;
    }

    /**
     * Adds as personServiceRequest
     *
     * The service requests made by persons representing the organisation.
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
     * The service requests made by persons representing the organisation.
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
     * The service requests made by persons representing the organisation.
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
     * The service requests made by persons representing the organisation.
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
     * The service requests made by persons representing the organisation.
     *
     * @param \Petrocki\IofXmlPhp\PersonServiceRequestType[] $personServiceRequest
     * @return self
     */
    public function setPersonServiceRequest(?array $personServiceRequest = null)
    {
        $this->personServiceRequest = $personServiceRequest;
        return $this;
    }
}

