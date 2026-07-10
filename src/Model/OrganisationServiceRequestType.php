<?php

namespace Petrocki\IofXmlPhp\Model;

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
     * @var \Petrocki\IofXmlPhp\Model\OrganisationType $organisation
     */
    private $organisation = null;

    /**
     * The service requests that the organisation made.
     *
     * @var \Petrocki\IofXmlPhp\Model\ServiceRequestType[] $serviceRequest
     */
    private $serviceRequest = [
        
    ];

    /**
     * The service requests made by persons representing the organisation.
     *
     * @var \Petrocki\IofXmlPhp\Model\PersonServiceRequestType[] $personServiceRequest
     */
    private $personServiceRequest = [
        
    ];

    /**
     * Gets as organisation
     *
     * The organisation that made the requests.
     *
     * @return \Petrocki\IofXmlPhp\Model\OrganisationType
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
     * @param \Petrocki\IofXmlPhp\Model\OrganisationType $organisation
     * @return self
     */
    public function setOrganisation(\Petrocki\IofXmlPhp\Model\OrganisationType $organisation)
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
     * @param \Petrocki\IofXmlPhp\Model\ServiceRequestType $serviceRequest
     */
    public function addToServiceRequest(\Petrocki\IofXmlPhp\Model\ServiceRequestType $serviceRequest)
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
     * @return \Petrocki\IofXmlPhp\Model\ServiceRequestType[]
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
     * @param \Petrocki\IofXmlPhp\Model\ServiceRequestType[] $serviceRequest
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
     * @param \Petrocki\IofXmlPhp\Model\PersonServiceRequestType $personServiceRequest
     */
    public function addToPersonServiceRequest(\Petrocki\IofXmlPhp\Model\PersonServiceRequestType $personServiceRequest)
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
     * @return \Petrocki\IofXmlPhp\Model\PersonServiceRequestType[]
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
     * @param \Petrocki\IofXmlPhp\Model\PersonServiceRequestType[] $personServiceRequest
     * @return self
     */
    public function setPersonServiceRequest(?array $personServiceRequest = null)
    {
        $this->personServiceRequest = $personServiceRequest;
        return $this;
    }
}

