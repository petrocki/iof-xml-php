<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing ServiceRequestType
 *
 *
 * XSD Type: ServiceRequest
 */
class ServiceRequestType
{
    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * @var \Petrocki\IofXmlPhp\IdType $id
     */
    private $id = null;

    /**
     * The service that is requested.
     *
     * @var \Petrocki\IofXmlPhp\ServiceType $service
     */
    private $service = null;

    /**
     * The quantity (number of instances) of the service that is requested.
     *
     * @var float $requestedQuantity
     */
    private $requestedQuantity = null;

    /**
     * The quantity (number of instances) of the service that has been delivered. Can differ from RequestedQuantity when the available number of instances of a service is limited.
     *
     * @var float $deliveredQuantity
     */
    private $deliveredQuantity = null;

    /**
     * Any extra information or comment attached to the service request.
     *
     * @var string $comment
     */
    private $comment = null;

    /**
     * The fees related to this service request.
     *
     * @var \Petrocki\IofXmlPhp\AssignedFeeType[] $assignedFee
     */
    private $assignedFee = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as modifyTime
     *
     * @return \DateTime
     */
    public function getModifyTime()
    {
        return $this->modifyTime;
    }

    /**
     * Sets a new modifyTime
     *
     * @param \DateTime $modifyTime
     * @return self
     */
    public function setModifyTime(\DateTime $modifyTime)
    {
        $this->modifyTime = $modifyTime;
        return $this;
    }

    /**
     * Gets as id
     *
     * @return \Petrocki\IofXmlPhp\IdType
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param \Petrocki\IofXmlPhp\IdType $id
     * @return self
     */
    public function setId(?\Petrocki\IofXmlPhp\IdType $id = null)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as service
     *
     * The service that is requested.
     *
     * @return \Petrocki\IofXmlPhp\ServiceType
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * The service that is requested.
     *
     * @param \Petrocki\IofXmlPhp\ServiceType $service
     * @return self
     */
    public function setService(\Petrocki\IofXmlPhp\ServiceType $service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * Gets as requestedQuantity
     *
     * The quantity (number of instances) of the service that is requested.
     *
     * @return float
     */
    public function getRequestedQuantity()
    {
        return $this->requestedQuantity;
    }

    /**
     * Sets a new requestedQuantity
     *
     * The quantity (number of instances) of the service that is requested.
     *
     * @param float $requestedQuantity
     * @return self
     */
    public function setRequestedQuantity($requestedQuantity)
    {
        $this->requestedQuantity = $requestedQuantity;
        return $this;
    }

    /**
     * Gets as deliveredQuantity
     *
     * The quantity (number of instances) of the service that has been delivered. Can differ from RequestedQuantity when the available number of instances of a service is limited.
     *
     * @return float
     */
    public function getDeliveredQuantity()
    {
        return $this->deliveredQuantity;
    }

    /**
     * Sets a new deliveredQuantity
     *
     * The quantity (number of instances) of the service that has been delivered. Can differ from RequestedQuantity when the available number of instances of a service is limited.
     *
     * @param float $deliveredQuantity
     * @return self
     */
    public function setDeliveredQuantity($deliveredQuantity)
    {
        $this->deliveredQuantity = $deliveredQuantity;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Any extra information or comment attached to the service request.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Any extra information or comment attached to the service request.
     *
     * @param string $comment
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Adds as assignedFee
     *
     * The fees related to this service request.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\AssignedFeeType $assignedFee
     */
    public function addToAssignedFee(\Petrocki\IofXmlPhp\AssignedFeeType $assignedFee)
    {
        $this->assignedFee[] = $assignedFee;
        return $this;
    }

    /**
     * isset assignedFee
     *
     * The fees related to this service request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAssignedFee($index)
    {
        return isset($this->assignedFee[$index]);
    }

    /**
     * unset assignedFee
     *
     * The fees related to this service request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAssignedFee($index)
    {
        unset($this->assignedFee[$index]);
    }

    /**
     * Gets as assignedFee
     *
     * The fees related to this service request.
     *
     * @return \Petrocki\IofXmlPhp\AssignedFeeType[]
     */
    public function getAssignedFee()
    {
        return $this->assignedFee;
    }

    /**
     * Sets a new assignedFee
     *
     * The fees related to this service request.
     *
     * @param \Petrocki\IofXmlPhp\AssignedFeeType[] $assignedFee
     * @return self
     */
    public function setAssignedFee(?array $assignedFee = null)
    {
        $this->assignedFee = $assignedFee;
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

