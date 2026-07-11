<?php

namespace IofXmlPhp\Model;

/**
 * Class representing PersonServiceRequestType
 *
 * Service requests made by a person.
 * XSD Type: PersonServiceRequest
 */
class PersonServiceRequestType
{
    /**
     * The person that made the requests.
     *
     * @var \IofXmlPhp\Model\PersonType $person
     */
    private $person = null;

    /**
     * The service requests.
     *
     * @var \IofXmlPhp\Model\ServiceRequestType[] $serviceRequest
     */
    private $serviceRequest = [
        
    ];

    /**
     * Gets as person
     *
     * The person that made the requests.
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
     * The person that made the requests.
     *
     * @param \IofXmlPhp\Model\PersonType $person
     * @return self
     */
    public function setPerson(\IofXmlPhp\Model\PersonType $person)
    {
        $this->person = $person;
        return $this;
    }

    /**
     * Adds as serviceRequest
     *
     * The service requests.
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
     * The service requests.
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
     * The service requests.
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
     * The service requests.
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
     * The service requests.
     *
     * @param \IofXmlPhp\Model\ServiceRequestType[] $serviceRequest
     * @return self
     */
    public function setServiceRequest(array $serviceRequest)
    {
        $this->serviceRequest = $serviceRequest;
        return $this;
    }
}

