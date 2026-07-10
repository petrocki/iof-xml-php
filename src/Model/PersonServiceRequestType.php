<?php

namespace Petrocki\IofXmlPhp\Model;

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
     * @var \Petrocki\IofXmlPhp\Model\PersonType $person
     */
    private $person = null;

    /**
     * The service requests.
     *
     * @var \Petrocki\IofXmlPhp\Model\ServiceRequestType[] $serviceRequest
     */
    private $serviceRequest = [
        
    ];

    /**
     * Gets as person
     *
     * The person that made the requests.
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
     * The person that made the requests.
     *
     * @param \Petrocki\IofXmlPhp\Model\PersonType $person
     * @return self
     */
    public function setPerson(\Petrocki\IofXmlPhp\Model\PersonType $person)
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
     * @return \Petrocki\IofXmlPhp\Model\ServiceRequestType[]
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
     * @param \Petrocki\IofXmlPhp\Model\ServiceRequestType[] $serviceRequest
     * @return self
     */
    public function setServiceRequest(array $serviceRequest)
    {
        $this->serviceRequest = $serviceRequest;
        return $this;
    }
}

