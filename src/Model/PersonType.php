<?php

namespace IofXmlPhp\Model;

/**
 * Class representing PersonType
 *
 * Represents a person. This could either be a competitor (see the Competitor element) or contact persons in an organisation (see the Organisation element).
 * XSD Type: Person
 */
class PersonType
{
    /**
     * @var string $sex
     */
    private $sex = null;

    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * The identifier of the person. Multiple identifiers can be included, e.g. when there is both a World Ranking Event identifier and a national database identifier for the person.
     *
     * @var \IofXmlPhp\Model\IdType[] $id
     */
    private $id = [
        
    ];

    /**
     * @var \IofXmlPhp\Model\PersonNameType $name
     */
    private $name = null;

    /**
     * The date when the person was born, expressed in ISO 8601 format.
     *
     * @var \DateTime $birthDate
     */
    private $birthDate = null;

    /**
     * @var \IofXmlPhp\Model\CountryType $nationality
     */
    private $nationality = null;

    /**
     * @var \IofXmlPhp\Model\AddressType[] $address
     */
    private $address = [
        
    ];

    /**
     * @var \IofXmlPhp\Model\ContactType[] $contact
     */
    private $contact = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Sets a new sex
     *
     * @param string $sex
     * @return self
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
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
     * Adds as id
     *
     * The identifier of the person. Multiple identifiers can be included, e.g. when there is both a World Ranking Event identifier and a national database identifier for the person.
     *
     * @return self
     * @param \IofXmlPhp\Model\IdType $id
     */
    public function addToId(\IofXmlPhp\Model\IdType $id)
    {
        $this->id[] = $id;
        return $this;
    }

    /**
     * isset id
     *
     * The identifier of the person. Multiple identifiers can be included, e.g. when there is both a World Ranking Event identifier and a national database identifier for the person.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetId($index)
    {
        return isset($this->id[$index]);
    }

    /**
     * unset id
     *
     * The identifier of the person. Multiple identifiers can be included, e.g. when there is both a World Ranking Event identifier and a national database identifier for the person.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetId($index)
    {
        unset($this->id[$index]);
    }

    /**
     * Gets as id
     *
     * The identifier of the person. Multiple identifiers can be included, e.g. when there is both a World Ranking Event identifier and a national database identifier for the person.
     *
     * @return \IofXmlPhp\Model\IdType[]
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * The identifier of the person. Multiple identifiers can be included, e.g. when there is both a World Ranking Event identifier and a national database identifier for the person.
     *
     * @param \IofXmlPhp\Model\IdType[] $id
     * @return self
     */
    public function setId(?array $id = null)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return \IofXmlPhp\Model\PersonNameType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \IofXmlPhp\Model\PersonNameType $name
     * @return self
     */
    public function setName(\IofXmlPhp\Model\PersonNameType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as birthDate
     *
     * The date when the person was born, expressed in ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets a new birthDate
     *
     * The date when the person was born, expressed in ISO 8601 format.
     *
     * @param \DateTime $birthDate
     * @return self
     */
    public function setBirthDate(?\DateTime $birthDate = null)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * Gets as nationality
     *
     * @return \IofXmlPhp\Model\CountryType
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Sets a new nationality
     *
     * @param \IofXmlPhp\Model\CountryType $nationality
     * @return self
     */
    public function setNationality(?\IofXmlPhp\Model\CountryType $nationality = null)
    {
        $this->nationality = $nationality;
        return $this;
    }

    /**
     * Adds as address
     *
     * @return self
     * @param \IofXmlPhp\Model\AddressType $address
     */
    public function addToAddress(\IofXmlPhp\Model\AddressType $address)
    {
        $this->address[] = $address;
        return $this;
    }

    /**
     * isset address
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddress($index)
    {
        return isset($this->address[$index]);
    }

    /**
     * unset address
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddress($index)
    {
        unset($this->address[$index]);
    }

    /**
     * Gets as address
     *
     * @return \IofXmlPhp\Model\AddressType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \IofXmlPhp\Model\AddressType[] $address
     * @return self
     */
    public function setAddress(?array $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Adds as contact
     *
     * @return self
     * @param \IofXmlPhp\Model\ContactType $contact
     */
    public function addToContact(\IofXmlPhp\Model\ContactType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContact($index)
    {
        return isset($this->contact[$index]);
    }

    /**
     * unset contact
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContact($index)
    {
        unset($this->contact[$index]);
    }

    /**
     * Gets as contact
     *
     * @return \IofXmlPhp\Model\ContactType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * @param \IofXmlPhp\Model\ContactType[] $contact
     * @return self
     */
    public function setContact(?array $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * Container element for custom elements from other schemas.
     *
     * @return \IofXmlPhp\Model\ExtensionsType
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
     * @param \IofXmlPhp\Model\ExtensionsType $extensions
     * @return self
     */
    public function setExtensions(?\IofXmlPhp\Model\ExtensionsType $extensions = null)
    {
        $this->extensions = $extensions;
        return $this;
    }
}

