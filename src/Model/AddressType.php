<?php

namespace Petrocki\IofXmlPhp\Model;

/**
 * Class representing AddressType
 *
 * The postal address of a person or organisation.
 * XSD Type: Address
 */
class AddressType
{
    /**
     * The address type, e.g. visitor address or invoice address.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * @var string $careOf
     */
    private $careOf = null;

    /**
     * @var string $street
     */
    private $street = null;

    /**
     * @var string $zipCode
     */
    private $zipCode = null;

    /**
     * @var string $city
     */
    private $city = null;

    /**
     * @var string $state
     */
    private $state = null;

    /**
     * @var \Petrocki\IofXmlPhp\Model\CountryType $country
     */
    private $country = null;

    /**
     * Gets as type
     *
     * The address type, e.g. visitor address or invoice address.
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
     * The address type, e.g. visitor address or invoice address.
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
     * Gets as careOf
     *
     * @return string
     */
    public function getCareOf()
    {
        return $this->careOf;
    }

    /**
     * Sets a new careOf
     *
     * @param string $careOf
     * @return self
     */
    public function setCareOf($careOf)
    {
        $this->careOf = $careOf;
        return $this;
    }

    /**
     * Gets as street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets a new street
     *
     * @param string $street
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * Gets as zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Sets a new zipCode
     *
     * @param string $zipCode
     * @return self
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * @param string $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Gets as country
     *
     * @return \Petrocki\IofXmlPhp\Model\CountryType
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param \Petrocki\IofXmlPhp\Model\CountryType $country
     * @return self
     */
    public function setCountry(?\Petrocki\IofXmlPhp\Model\CountryType $country = null)
    {
        $this->country = $country;
        return $this;
    }
}

