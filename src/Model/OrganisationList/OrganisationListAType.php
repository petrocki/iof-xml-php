<?php

namespace Petrocki\IofXmlPhp\Model\OrganisationList;

use Petrocki\IofXmlPhp\Model\BaseMessageElementType;

/**
 * Class representing OrganisationListAType
 */
class OrganisationListAType extends BaseMessageElementType
{
    /**
     * @var \Petrocki\IofXmlPhp\Model\OrganisationType[] $organisation
     */
    private $organisation = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Adds as organisation
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\Model\OrganisationType $organisation
     */
    public function addToOrganisation(\Petrocki\IofXmlPhp\Model\OrganisationType $organisation)
    {
        $this->organisation[] = $organisation;
        return $this;
    }

    /**
     * isset organisation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrganisation($index)
    {
        return isset($this->organisation[$index]);
    }

    /**
     * unset organisation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrganisation($index)
    {
        unset($this->organisation[$index]);
    }

    /**
     * Gets as organisation
     *
     * @return \Petrocki\IofXmlPhp\Model\OrganisationType[]
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Sets a new organisation
     *
     * @param \Petrocki\IofXmlPhp\Model\OrganisationType[] $organisation
     * @return self
     */
    public function setOrganisation(?array $organisation = null)
    {
        $this->organisation = $organisation;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * Container element for custom elements from other schemas.
     *
     * @return \Petrocki\IofXmlPhp\Model\ExtensionsType
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
     * @param \Petrocki\IofXmlPhp\Model\ExtensionsType $extensions
     * @return self
     */
    public function setExtensions(?\Petrocki\IofXmlPhp\Model\ExtensionsType $extensions = null)
    {
        $this->extensions = $extensions;
        return $this;
    }
}

