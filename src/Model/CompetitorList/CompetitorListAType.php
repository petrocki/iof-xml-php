<?php

namespace IofXmlPhp\Model\CompetitorList;

use IofXmlPhp\Model\BaseMessageElementType;

/**
 * Class representing CompetitorListAType
 */
class CompetitorListAType extends BaseMessageElementType
{
    /**
     * @var \IofXmlPhp\Model\CompetitorType[] $competitor
     */
    private $competitor = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Adds as competitor
     *
     * @return self
     * @param \IofXmlPhp\Model\CompetitorType $competitor
     */
    public function addToCompetitor(\IofXmlPhp\Model\CompetitorType $competitor)
    {
        $this->competitor[] = $competitor;
        return $this;
    }

    /**
     * isset competitor
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCompetitor($index)
    {
        return isset($this->competitor[$index]);
    }

    /**
     * unset competitor
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCompetitor($index)
    {
        unset($this->competitor[$index]);
    }

    /**
     * Gets as competitor
     *
     * @return \IofXmlPhp\Model\CompetitorType[]
     */
    public function getCompetitor()
    {
        return $this->competitor;
    }

    /**
     * Sets a new competitor
     *
     * @param \IofXmlPhp\Model\CompetitorType[] $competitor
     * @return self
     */
    public function setCompetitor(?array $competitor = null)
    {
        $this->competitor = $competitor;
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

