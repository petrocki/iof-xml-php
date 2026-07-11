<?php

namespace IofXmlPhp\Model;

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
     * @var \IofXmlPhp\Model\OrganisationType $organisation
     */
    private $organisation = null;

    /**
     * The service requests that the organisation made.
     *
     * @var \IofXmlPhp\Model\ServiceRequestType[] $serviceRequest
     */
    private $serviceRequest = [
        
    ];

    /**
     * The service requests made by persons representing the organisation.
     *
     * @var \IofXmlPhp\Model\PersonServiceRequestType[] $personServiceRequest
     */
    private $personServiceRequest = [
        
    ];

    /**
     * Gets as organisation
     *
     * The organisation that made the requests.
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
     * The organisation that made the requests.
     *
     * @param \IofXmlPhp\Model\OrganisationType $organisation
     * @return self
     */
    public function setOrganisation(\IofXmlPhp\Model\OrganisationType $organisation)
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
     * @param \IofXmlPhp\Model\ServiceRequestType $serviceRequest
     */
    public function addToServiceRequest(\IofXmlPhp\Model\ServiceRequestType $serviceRequest)
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
     * @return \IofXmlPhp\Model\ServiceRequestType[]
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
     * @param \IofXmlPhp\Model\ServiceRequestType[] $serviceRequest
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
     * @param \IofXmlPhp\Model\PersonServiceRequestType $personServiceRequest
     */
    public function addToPersonServiceRequest(\IofXmlPhp\Model\PersonServiceRequestType $personServiceRequest)
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
     * @return \IofXmlPhp\Model\PersonServiceRequestType[]
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
     * @param \IofXmlPhp\Model\PersonServiceRequestType[] $personServiceRequest
     * @return self
     */
    public function setPersonServiceRequest(?array $personServiceRequest = null)
    {
        $this->personServiceRequest = $personServiceRequest;
        return $this;
    }
}

