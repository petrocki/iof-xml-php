<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing ServiceType
 *
 * Defines a general purpose service request, e.g. for rental card or accomodation.
 * XSD Type: Service
 */
class ServiceType
{
    /**
     * Used to mark special services, e.g. rental cards whose fees that are to be used in entry scenarios.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * @var \Petrocki\IofXmlPhp\IdType $id
     */
    private $id = null;

    /**
     * The name of the service.
     *
     * @var \Petrocki\IofXmlPhp\LanguageStringType[] $name
     */
    private $name = [
        
    ];

    /**
     * The fees attached to this service.
     *
     * @var \Petrocki\IofXmlPhp\FeeType[] $fee
     */
    private $fee = [
        
    ];

    /**
     * A further description of the service than the Name element gives.
     *
     * @var \Petrocki\IofXmlPhp\LanguageStringType[] $description
     */
    private $description = [
        
    ];

    /**
     * The maximum number of instances of this service that are available. Omit this element if there is no such limit.
     *
     * @var float $maxNumber
     */
    private $maxNumber = null;

    /**
     * The number of instances of this service that has been requested.
     *
     * @var float $requestedNumber
     */
    private $requestedNumber = null;

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as type
     *
     * Used to mark special services, e.g. rental cards whose fees that are to be used in entry scenarios.
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
     * Used to mark special services, e.g. rental cards whose fees that are to be used in entry scenarios.
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
     * Adds as name
     *
     * The name of the service.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\LanguageStringType $name
     */
    public function addToName(\Petrocki\IofXmlPhp\LanguageStringType $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * isset name
     *
     * The name of the service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * The name of the service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * The name of the service.
     *
     * @return \Petrocki\IofXmlPhp\LanguageStringType[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the service.
     *
     * @param \Petrocki\IofXmlPhp\LanguageStringType[] $name
     * @return self
     */
    public function setName(array $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as fee
     *
     * The fees attached to this service.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\FeeType $fee
     */
    public function addToFee(\Petrocki\IofXmlPhp\FeeType $fee)
    {
        $this->fee[] = $fee;
        return $this;
    }

    /**
     * isset fee
     *
     * The fees attached to this service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFee($index)
    {
        return isset($this->fee[$index]);
    }

    /**
     * unset fee
     *
     * The fees attached to this service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFee($index)
    {
        unset($this->fee[$index]);
    }

    /**
     * Gets as fee
     *
     * The fees attached to this service.
     *
     * @return \Petrocki\IofXmlPhp\FeeType[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * The fees attached to this service.
     *
     * @param \Petrocki\IofXmlPhp\FeeType[] $fee
     * @return self
     */
    public function setFee(?array $fee = null)
    {
        $this->fee = $fee;
        return $this;
    }

    /**
     * Adds as description
     *
     * A further description of the service than the Name element gives.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\LanguageStringType $description
     */
    public function addToDescription(\Petrocki\IofXmlPhp\LanguageStringType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * A further description of the service than the Name element gives.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * A further description of the service than the Name element gives.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * A further description of the service than the Name element gives.
     *
     * @return \Petrocki\IofXmlPhp\LanguageStringType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A further description of the service than the Name element gives.
     *
     * @param \Petrocki\IofXmlPhp\LanguageStringType[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as maxNumber
     *
     * The maximum number of instances of this service that are available. Omit this element if there is no such limit.
     *
     * @return float
     */
    public function getMaxNumber()
    {
        return $this->maxNumber;
    }

    /**
     * Sets a new maxNumber
     *
     * The maximum number of instances of this service that are available. Omit this element if there is no such limit.
     *
     * @param float $maxNumber
     * @return self
     */
    public function setMaxNumber($maxNumber)
    {
        $this->maxNumber = $maxNumber;
        return $this;
    }

    /**
     * Gets as requestedNumber
     *
     * The number of instances of this service that has been requested.
     *
     * @return float
     */
    public function getRequestedNumber()
    {
        return $this->requestedNumber;
    }

    /**
     * Sets a new requestedNumber
     *
     * The number of instances of this service that has been requested.
     *
     * @param float $requestedNumber
     * @return self
     */
    public function setRequestedNumber($requestedNumber)
    {
        $this->requestedNumber = $requestedNumber;
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

