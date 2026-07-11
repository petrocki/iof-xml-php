<?php

namespace IofXmlPhp\Model;

/**
 * Class representing TeamEntryPersonType
 *
 * Defines a person that is part of a team entry.
 * XSD Type: TeamEntryPerson
 */
class TeamEntryPersonType
{
    /**
     * The person. Omit if the person is not known at the moment, but for example the control card is known.
     *
     * @var \IofXmlPhp\Model\PersonType $person
     */
    private $person = null;

    /**
     * The organisation that the person represent. Omit if this is the same as the organsiation given in the TeamEntry element.
     *
     * @var \IofXmlPhp\Model\OrganisationType $organisation
     */
    private $organisation = null;

    /**
     * For relay entries, the number of the leg that this person is taking part in.
     *
     * @var int $leg
     */
    private $leg = null;

    /**
     * Defines the person's starting order within a team at a parallel relay leg.
     *
     * @var int $legOrder
     */
    private $legOrder = null;

    /**
     * Information about the control cards (punching cards) that the person uses at the event. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
     *
     * @var \IofXmlPhp\Model\ControlCardType[] $controlCard
     */
    private $controlCard = [
        
    ];

    /**
     * Any score that is submitted together with the entry, e.g. World Ranking points.
     *
     * @var \IofXmlPhp\Model\ScoreType[] $score
     */
    private $score = [
        
    ];

    /**
     * The fees that this particular person has to pay when entering the event. In a multi-race event, there is usually one element for each race. Fees assigned to the team as a whole should be defined in the TeamEntry element.
     *
     * @var \IofXmlPhp\Model\AssignedFeeType[] $assignedFee
     */
    private $assignedFee = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as person
     *
     * The person. Omit if the person is not known at the moment, but for example the control card is known.
     *
     * @return \IofXmlPhp\Model\PersonType
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets a new person
     *
     * The person. Omit if the person is not known at the moment, but for example the control card is known.
     *
     * @param \IofXmlPhp\Model\PersonType $person
     * @return self
     */
    public function setPerson(?\IofXmlPhp\Model\PersonType $person = null)
    {
        $this->person = $person;
        return $this;
    }

    /**
     * Gets as organisation
     *
     * The organisation that the person represent. Omit if this is the same as the organsiation given in the TeamEntry element.
     *
     * @return \IofXmlPhp\Model\OrganisationType
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Sets a new organisation
     *
     * The organisation that the person represent. Omit if this is the same as the organsiation given in the TeamEntry element.
     *
     * @param \IofXmlPhp\Model\OrganisationType $organisation
     * @return self
     */
    public function setOrganisation(?\IofXmlPhp\Model\OrganisationType $organisation = null)
    {
        $this->organisation = $organisation;
        return $this;
    }

    /**
     * Gets as leg
     *
     * For relay entries, the number of the leg that this person is taking part in.
     *
     * @return int
     */
    public function getLeg()
    {
        return $this->leg;
    }

    /**
     * Sets a new leg
     *
     * For relay entries, the number of the leg that this person is taking part in.
     *
     * @param int $leg
     * @return self
     */
    public function setLeg($leg)
    {
        $this->leg = $leg;
        return $this;
    }

    /**
     * Gets as legOrder
     *
     * Defines the person's starting order within a team at a parallel relay leg.
     *
     * @return int
     */
    public function getLegOrder()
    {
        return $this->legOrder;
    }

    /**
     * Sets a new legOrder
     *
     * Defines the person's starting order within a team at a parallel relay leg.
     *
     * @param int $legOrder
     * @return self
     */
    public function setLegOrder($legOrder)
    {
        $this->legOrder = $legOrder;
        return $this;
    }

    /**
     * Adds as controlCard
     *
     * Information about the control cards (punching cards) that the person uses at the event. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
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
     * Information about the control cards (punching cards) that the person uses at the event. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
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
     * Information about the control cards (punching cards) that the person uses at the event. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
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
     * Information about the control cards (punching cards) that the person uses at the event. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
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
     * Information about the control cards (punching cards) that the person uses at the event. Multiple control cards can be specified, e.g. one for punch checking and another for timing.
     *
     * @param \IofXmlPhp\Model\ControlCardType[] $controlCard
     * @return self
     */
    public function setControlCard(?array $controlCard = null)
    {
        $this->controlCard = $controlCard;
        return $this;
    }

    /**
     * Adds as score
     *
     * Any score that is submitted together with the entry, e.g. World Ranking points.
     *
     * @return self
     * @param \IofXmlPhp\Model\ScoreType $score
     */
    public function addToScore(\IofXmlPhp\Model\ScoreType $score)
    {
        $this->score[] = $score;
        return $this;
    }

    /**
     * isset score
     *
     * Any score that is submitted together with the entry, e.g. World Ranking points.
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
     * Any score that is submitted together with the entry, e.g. World Ranking points.
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
     * Any score that is submitted together with the entry, e.g. World Ranking points.
     *
     * @return \IofXmlPhp\Model\ScoreType[]
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Sets a new score
     *
     * Any score that is submitted together with the entry, e.g. World Ranking points.
     *
     * @param \IofXmlPhp\Model\ScoreType[] $score
     * @return self
     */
    public function setScore(?array $score = null)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * Adds as assignedFee
     *
     * The fees that this particular person has to pay when entering the event. In a multi-race event, there is usually one element for each race. Fees assigned to the team as a whole should be defined in the TeamEntry element.
     *
     * @return self
     * @param \IofXmlPhp\Model\AssignedFeeType $assignedFee
     */
    public function addToAssignedFee(\IofXmlPhp\Model\AssignedFeeType $assignedFee)
    {
        $this->assignedFee[] = $assignedFee;
        return $this;
    }

    /**
     * isset assignedFee
     *
     * The fees that this particular person has to pay when entering the event. In a multi-race event, there is usually one element for each race. Fees assigned to the team as a whole should be defined in the TeamEntry element.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAssignedFee($index)
    {
        return isset($this->assignedFee[$index]);
    }

    /**
     * unset assignedFee
     *
     * The fees that this particular person has to pay when entering the event. In a multi-race event, there is usually one element for each race. Fees assigned to the team as a whole should be defined in the TeamEntry element.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAssignedFee($index)
    {
        unset($this->assignedFee[$index]);
    }

    /**
     * Gets as assignedFee
     *
     * The fees that this particular person has to pay when entering the event. In a multi-race event, there is usually one element for each race. Fees assigned to the team as a whole should be defined in the TeamEntry element.
     *
     * @return \IofXmlPhp\Model\AssignedFeeType[]
     */
    public function getAssignedFee()
    {
        return $this->assignedFee;
    }

    /**
     * Sets a new assignedFee
     *
     * The fees that this particular person has to pay when entering the event. In a multi-race event, there is usually one element for each race. Fees assigned to the team as a whole should be defined in the TeamEntry element.
     *
     * @param \IofXmlPhp\Model\AssignedFeeType[] $assignedFee
     * @return self
     */
    public function setAssignedFee(?array $assignedFee = null)
    {
        $this->assignedFee = $assignedFee;
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

