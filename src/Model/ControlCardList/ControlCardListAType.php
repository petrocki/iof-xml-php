<?php

namespace IofXmlPhp\Model\ControlCardList;

use IofXmlPhp\Model\BaseMessageElementType;

/**
 * Class representing ControlCardListAType
 */
class ControlCardListAType extends BaseMessageElementType
{
    /**
     * The owner of the control cards.
     *
     * @var string $owner
     */
    private $owner = null;

    /**
     * The control cards.
     *
     * @var \IofXmlPhp\Model\ControlCardType[] $controlCard
     */
    private $controlCard = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as owner
     *
     * The owner of the control cards.
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets a new owner
     *
     * The owner of the control cards.
     *
     * @param string $owner
     * @return self
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Adds as controlCard
     *
     * The control cards.
     *
     * @return self
     * @param \IofXmlPhp\Model\ControlCardType $controlCard
     */
    public function addToControlCard(\IofXmlPhp\Model\ControlCardType $controlCard)
    {
        $this->controlCard[] = $controlCard;
        return $this;
    }

    /**
     * isset controlCard
     *
     * The control cards.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetControlCard($index)
    {
        return isset($this->controlCard[$index]);
    }

    /**
     * unset controlCard
     *
     * The control cards.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetControlCard($index)
    {
        unset($this->controlCard[$index]);
    }

    /**
     * Gets as controlCard
     *
     * The control cards.
     *
     * @return \IofXmlPhp\Model\ControlCardType[]
     */
    public function getControlCard()
    {
        return $this->controlCard;
    }

    /**
     * Sets a new controlCard
     *
     * The control cards.
     *
     * @param \IofXmlPhp\Model\ControlCardType[] $controlCard
     * @return self
     */
    public function setControlCard(array $controlCard)
    {
        $this->controlCard = $controlCard;
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

