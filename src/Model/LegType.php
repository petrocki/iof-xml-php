<?php

namespace Petrocki\IofXmlPhp\Model;

/**
 * Class representing LegType
 *
 * Defines extra information for a relay leg.
 * XSD Type: Leg
 */
class LegType
{
    /**
     * The minimum number of competitors in case of a parallel leg.
     *
     * @var int $minNumberOfCompetitors
     */
    private $minNumberOfCompetitors = null;

    /**
     * The maximum number of competitors in case of a parallel leg.
     *
     * @var int $maxNumberOfCompetitors
     */
    private $maxNumberOfCompetitors = null;

    /**
     * The name of the leg, if not sequentially named.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as minNumberOfCompetitors
     *
     * The minimum number of competitors in case of a parallel leg.
     *
     * @return int
     */
    public function getMinNumberOfCompetitors()
    {
        return $this->minNumberOfCompetitors;
    }

    /**
     * Sets a new minNumberOfCompetitors
     *
     * The minimum number of competitors in case of a parallel leg.
     *
     * @param int $minNumberOfCompetitors
     * @return self
     */
    public function setMinNumberOfCompetitors($minNumberOfCompetitors)
    {
        $this->minNumberOfCompetitors = $minNumberOfCompetitors;
        return $this;
    }

    /**
     * Gets as maxNumberOfCompetitors
     *
     * The maximum number of competitors in case of a parallel leg.
     *
     * @return int
     */
    public function getMaxNumberOfCompetitors()
    {
        return $this->maxNumberOfCompetitors;
    }

    /**
     * Sets a new maxNumberOfCompetitors
     *
     * The maximum number of competitors in case of a parallel leg.
     *
     * @param int $maxNumberOfCompetitors
     * @return self
     */
    public function setMaxNumberOfCompetitors($maxNumberOfCompetitors)
    {
        $this->maxNumberOfCompetitors = $maxNumberOfCompetitors;
        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the leg, if not sequentially named.
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
     * The name of the leg, if not sequentially named.
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

