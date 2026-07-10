<?php

namespace Petrocki\IofXmlPhp\Model;

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
     * @var \Petrocki\IofXmlPhp\Model\PersonType $person
     */
    private $person = null;

    /**
     * The organisations that the person is member of.
     *
     * @var \Petrocki\IofXmlPhp\Model\OrganisationType[] $organisation
     */
    private $organisation = [
        
    ];

    /**
     * The default control cards of the competitor.
     *
     * @var \Petrocki\IofXmlPhp\Model\ControlCardType[] $controlCard
     */
    private $controlCard = [
        
    ];

    /**
     * The default classes of the competitor.
     *
     * @var \Petrocki\IofXmlPhp\Model\ClassType[] $class
     */
    private $class = [
        
    ];

    /**
     * Any scores, e.g. ranking scores, for the person.
     *
     * @var \Petrocki\IofXmlPhp\Model\ScoreType[] $score
     */
    private $score = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\Model\ExtensionsType $extensions
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
     * @return \Petrocki\IofXmlPhp\Model\PersonType
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets a new person
     *
     * @param \Petrocki\IofXmlPhp\Model\PersonType $person
     * @return self
     */
    public function setPerson(\Petrocki\IofXmlPhp\Model\PersonType $person)
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
     * @return \Petrocki\IofXmlPhp\Model\OrganisationType[]
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
     * @param \Petrocki\IofXmlPhp\Model\OrganisationType[] $organisation
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
     * @param \Petrocki\IofXmlPhp\Model\ControlCardType $controlCard
     */
    public function addToControlCard(\Petrocki\IofXmlPhp\Model\ControlCardType $controlCard)
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
     * @return \Petrocki\IofXmlPhp\Model\ControlCardType[]
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
     * @param \Petrocki\IofXmlPhp\Model\ControlCardType[] $controlCard
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
     * @param \Petrocki\IofXmlPhp\Model\ClassType $class
     */
    public function addToClass(\Petrocki\IofXmlPhp\Model\ClassType $class)
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
     * @return \Petrocki\IofXmlPhp\Model\ClassType[]
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
     * @param \Petrocki\IofXmlPhp\Model\ClassType[] $class
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
     * @param \Petrocki\IofXmlPhp\Model\ScoreType $score
     */
    public function addToScore(\Petrocki\IofXmlPhp\Model\ScoreType $score)
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
     * @return \Petrocki\IofXmlPhp\Model\ScoreType[]
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
     * @param \Petrocki\IofXmlPhp\Model\ScoreType[] $score
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

