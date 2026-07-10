<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing CompetitorType
 *
 * Represents information about a person in a competition context, i.e. including organisation and control card.
 * XSD Type: Competitor
 */
class CompetitorType
{
    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * @var \Petrocki\IofXmlPhp\PersonType $person
     */
    private $person = null;

    /**
     * The organisations that the person is member of.
     *
     * @var \Petrocki\IofXmlPhp\OrganisationType[] $organisation
     */
    private $organisation = [
        
    ];

    /**
     * The default control cards of the competitor.
     *
     * @var \Petrocki\IofXmlPhp\ControlCardType[] $controlCard
     */
    private $controlCard = [
        
    ];

    /**
     * The default classes of the competitor.
     *
     * @var \Petrocki\IofXmlPhp\ClassType[] $class
     */
    private $class = [
        
    ];

    /**
     * Any scores, e.g. ranking scores, for the person.
     *
     * @var \Petrocki\IofXmlPhp\ScoreType[] $score
     */
    private $score = [
        
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
     * Gets as person
     *
     * @return \Petrocki\IofXmlPhp\PersonType
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets a new person
     *
     * @param \Petrocki\IofXmlPhp\PersonType $person
     * @return self
     */
    public function setPerson(\Petrocki\IofXmlPhp\PersonType $person)
    {
        $this->person = $person;
        return $this;
    }

    /**
     * Adds as organisation
     *
     * The organisations that the person is member of.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\OrganisationType $organisation
     */
    public function addToOrganisation(\Petrocki\IofXmlPhp\OrganisationType $organisation)
    {
        $this->organisation[] = $organisation;
        return $this;
    }

    /**
     * isset organisation
     *
     * The organisations that the person is member of.
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
     * The organisations that the person is member of.
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
     * The organisations that the person is member of.
     *
     * @return \Petrocki\IofXmlPhp\OrganisationType[]
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Sets a new organisation
     *
     * The organisations that the person is member of.
     *
     * @param \Petrocki\IofXmlPhp\OrganisationType[] $organisation
     * @return self
     */
    public function setOrganisation(?array $organisation = null)
    {
        $this->organisation = $organisation;
        return $this;
    }

    /**
     * Adds as controlCard
     *
     * The default control cards of the competitor.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\ControlCardType $controlCard
     */
    public function addToControlCard(\Petrocki\IofXmlPhp\ControlCardType $controlCard)
    {
        $this->controlCard[] = $controlCard;
        return $this;
    }

    /**
     * isset controlCard
     *
     * The default control cards of the competitor.
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
     * The default control cards of the competitor.
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
     * The default control cards of the competitor.
     *
     * @return \Petrocki\IofXmlPhp\ControlCardType[]
     */
    public function getControlCard()
    {
        return $this->controlCard;
    }

    /**
     * Sets a new controlCard
     *
     * The default control cards of the competitor.
     *
     * @param \Petrocki\IofXmlPhp\ControlCardType[] $controlCard
     * @return self
     */
    public function setControlCard(?array $controlCard = null)
    {
        $this->controlCard = $controlCard;
        return $this;
    }

    /**
     * Adds as class
     *
     * The default classes of the competitor.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\ClassType $class
     */
    public function addToClass(\Petrocki\IofXmlPhp\ClassType $class)
    {
        $this->class[] = $class;
        return $this;
    }

    /**
     * isset class
     *
     * The default classes of the competitor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClass($index)
    {
        return isset($this->class[$index]);
    }

    /**
     * unset class
     *
     * The default classes of the competitor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClass($index)
    {
        unset($this->class[$index]);
    }

    /**
     * Gets as class
     *
     * The default classes of the competitor.
     *
     * @return \Petrocki\IofXmlPhp\ClassType[]
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * The default classes of the competitor.
     *
     * @param \Petrocki\IofXmlPhp\ClassType[] $class
     * @return self
     */
    public function setClass(?array $class = null)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Adds as score
     *
     * Any scores, e.g. ranking scores, for the person.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\ScoreType $score
     */
    public function addToScore(\Petrocki\IofXmlPhp\ScoreType $score)
    {
        $this->score[] = $score;
        return $this;
    }

    /**
     * isset score
     *
     * Any scores, e.g. ranking scores, for the person.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetScore($index)
    {
        return isset($this->score[$index]);
    }

    /**
     * unset score
     *
     * Any scores, e.g. ranking scores, for the person.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetScore($index)
    {
        unset($this->score[$index]);
    }

    /**
     * Gets as score
     *
     * Any scores, e.g. ranking scores, for the person.
     *
     * @return \Petrocki\IofXmlPhp\ScoreType[]
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Sets a new score
     *
     * Any scores, e.g. ranking scores, for the person.
     *
     * @param \Petrocki\IofXmlPhp\ScoreType[] $score
     * @return self
     */
    public function setScore(?array $score = null)
    {
        $this->score = $score;
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

