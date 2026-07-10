<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing OrganisationType
 *
 * Information about an organisation, i.e. address, contact person(s) etc. An organisation is a general term including federations, clubs, etc.
 * XSD Type: Organisation
 */
class OrganisationType
{
    /**
     * The hierarchical level or type of an organisation.
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
     * The full name of the organisation.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * The short (abbreviated) name of the organisation.
     *
     * @var string $shortName
     */
    private $shortName = null;

    /**
     * The name of the organisation as appearing in result lists targeted to media.
     *
     * @var string $mediaName
     */
    private $mediaName = null;

    /**
     * The id of the parent of this organisation, e.g. a regional organisation for a club.
     *
     * @var int $parentOrganisationId
     */
    private $parentOrganisationId = null;

    /**
     * @var \Petrocki\IofXmlPhp\CountryType $country
     */
    private $country = null;

    /**
     * @var \Petrocki\IofXmlPhp\AddressType[] $address
     */
    private $address = [
        
    ];

    /**
     * @var \Petrocki\IofXmlPhp\ContactType[] $contact
     */
    private $contact = [
        
    ];

    /**
     * The geographical location of the organisation, e.g. a city center, an office or a club house.
     *
     * @var \Petrocki\IofXmlPhp\GeoPositionType $position
     */
    private $position = null;

    /**
     * @var \Petrocki\IofXmlPhp\AccountType[] $account
     */
    private $account = [
        
    ];

    /**
     * Persons having certain roles within the organisation, e.g. chairman, secretary, and treasurer.
     *
     * @var \Petrocki\IofXmlPhp\RoleType[] $role
     */
    private $role = [
        
    ];

    /**
     * The logotype for the organisation. Multiple logotypes may be included; in this case, make sure to include width and height attributes.
     *
     * @var \Petrocki\IofXmlPhp\ImageType[] $logotype
     */
    private $logotype = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as type
     *
     * The hierarchical level or type of an organisation.
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
     * The hierarchical level or type of an organisation.
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
     * Gets as name
     *
     * The full name of the organisation.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The full name of the organisation.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as shortName
     *
     * The short (abbreviated) name of the organisation.
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Sets a new shortName
     *
     * The short (abbreviated) name of the organisation.
     *
     * @param string $shortName
     * @return self
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
        return $this;
    }

    /**
     * Gets as mediaName
     *
     * The name of the organisation as appearing in result lists targeted to media.
     *
     * @return string
     */
    public function getMediaName()
    {
        return $this->mediaName;
    }

    /**
     * Sets a new mediaName
     *
     * The name of the organisation as appearing in result lists targeted to media.
     *
     * @param string $mediaName
     * @return self
     */
    public function setMediaName($mediaName)
    {
        $this->mediaName = $mediaName;
        return $this;
    }

    /**
     * Gets as parentOrganisationId
     *
     * The id of the parent of this organisation, e.g. a regional organisation for a club.
     *
     * @return int
     */
    public function getParentOrganisationId()
    {
        return $this->parentOrganisationId;
    }

    /**
     * Sets a new parentOrganisationId
     *
     * The id of the parent of this organisation, e.g. a regional organisation for a club.
     *
     * @param int $parentOrganisationId
     * @return self
     */
    public function setParentOrganisationId($parentOrganisationId)
    {
        $this->parentOrganisationId = $parentOrganisationId;
        return $this;
    }

    /**
     * Gets as country
     *
     * @return \Petrocki\IofXmlPhp\CountryType
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param \Petrocki\IofXmlPhp\CountryType $country
     * @return self
     */
    public function setCountry(?\Petrocki\IofXmlPhp\CountryType $country = null)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Adds as address
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\AddressType $address
     */
    public function addToAddress(\Petrocki\IofXmlPhp\AddressType $address)
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
     * @return \Petrocki\IofXmlPhp\AddressType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \Petrocki\IofXmlPhp\AddressType[] $address
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
     * @param \Petrocki\IofXmlPhp\ContactType $contact
     */
    public function addToContact(\Petrocki\IofXmlPhp\ContactType $contact)
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
     * @return \Petrocki\IofXmlPhp\ContactType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * @param \Petrocki\IofXmlPhp\ContactType[] $contact
     * @return self
     */
    public function setContact(?array $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as position
     *
     * The geographical location of the organisation, e.g. a city center, an office or a club house.
     *
     * @return \Petrocki\IofXmlPhp\GeoPositionType
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * The geographical location of the organisation, e.g. a city center, an office or a club house.
     *
     * @param \Petrocki\IofXmlPhp\GeoPositionType $position
     * @return self
     */
    public function setPosition(?\Petrocki\IofXmlPhp\GeoPositionType $position = null)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Adds as account
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\AccountType $account
     */
    public function addToAccount(\Petrocki\IofXmlPhp\AccountType $account)
    {
        $this->account[] = $account;
        return $this;
    }

    /**
     * isset account
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccount($index)
    {
        return isset($this->account[$index]);
    }

    /**
     * unset account
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccount($index)
    {
        unset($this->account[$index]);
    }

    /**
     * Gets as account
     *
     * @return \Petrocki\IofXmlPhp\AccountType[]
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * @param \Petrocki\IofXmlPhp\AccountType[] $account
     * @return self
     */
    public function setAccount(?array $account = null)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Adds as role
     *
     * Persons having certain roles within the organisation, e.g. chairman, secretary, and treasurer.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\RoleType $role
     */
    public function addToRole(\Petrocki\IofXmlPhp\RoleType $role)
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * isset role
     *
     * Persons having certain roles within the organisation, e.g. chairman, secretary, and treasurer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRole($index)
    {
        return isset($this->role[$index]);
    }

    /**
     * unset role
     *
     * Persons having certain roles within the organisation, e.g. chairman, secretary, and treasurer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRole($index)
    {
        unset($this->role[$index]);
    }

    /**
     * Gets as role
     *
     * Persons having certain roles within the organisation, e.g. chairman, secretary, and treasurer.
     *
     * @return \Petrocki\IofXmlPhp\RoleType[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * Persons having certain roles within the organisation, e.g. chairman, secretary, and treasurer.
     *
     * @param \Petrocki\IofXmlPhp\RoleType[] $role
     * @return self
     */
    public function setRole(?array $role = null)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Adds as logotype
     *
     * The logotype for the organisation. Multiple logotypes may be included; in this case, make sure to include width and height attributes.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\ImageType $logotype
     */
    public function addToLogotype(\Petrocki\IofXmlPhp\ImageType $logotype)
    {
        $this->logotype[] = $logotype;
        return $this;
    }

    /**
     * isset logotype
     *
     * The logotype for the organisation. Multiple logotypes may be included; in this case, make sure to include width and height attributes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLogotype($index)
    {
        return isset($this->logotype[$index]);
    }

    /**
     * unset logotype
     *
     * The logotype for the organisation. Multiple logotypes may be included; in this case, make sure to include width and height attributes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLogotype($index)
    {
        unset($this->logotype[$index]);
    }

    /**
     * Gets as logotype
     *
     * The logotype for the organisation. Multiple logotypes may be included; in this case, make sure to include width and height attributes.
     *
     * @return \Petrocki\IofXmlPhp\ImageType[]
     */
    public function getLogotype()
    {
        return $this->logotype;
    }

    /**
     * Sets a new logotype
     *
     * The logotype for the organisation. Multiple logotypes may be included; in this case, make sure to include width and height attributes.
     *
     * @param \Petrocki\IofXmlPhp\ImageType[] $logotype
     * @return self
     */
    public function setLogotype(?array $logotype = null)
    {
        $this->logotype = $logotype;
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

