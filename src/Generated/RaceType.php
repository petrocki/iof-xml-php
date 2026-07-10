<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing RaceType
 *
 * An event consists of a number of races. The number is equal to the number of times a competitor should start.
 * XSD Type: Race
 */
class RaceType
{
    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * The ordinal number of the race in the multi-race event, starting at 1.
     *
     * @var int $raceNumber
     */
    private $raceNumber = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * The start time for the first starting competitor of the race.
     *
     * @var \Petrocki\IofXmlPhp\DateAndOptionalTimeType $startTime
     */
    private $startTime = null;

    /**
     * The time when the finish closes.
     *
     * @var \Petrocki\IofXmlPhp\DateAndOptionalTimeType $endTime
     */
    private $endTime = null;

    /**
     * The status of the race. This element overrides the Status element of the parent Event element.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * The classification or level of the race. This element overrides the Classification element of the parent Event element.
     *
     * @var string $classification
     */
    private $classification = null;

    /**
     * The geographical location of the arena.
     *
     * @var \Petrocki\IofXmlPhp\GeoPositionType $position
     */
    private $position = null;

    /**
     * @var string[] $discipline
     */
    private $discipline = [
        
    ];

    /**
     * The organisations that organise the event.
     *
     * @var \Petrocki\IofXmlPhp\OrganisationType[] $organiser
     */
    private $organiser = [
        
    ];

    /**
     * The main officials of the event, e.g. course setter and event president.
     *
     * @var \Petrocki\IofXmlPhp\RoleType[] $official
     */
    private $official = [
        
    ];

    /**
     * The services available for the race, e.g. accomodation and transport.
     *
     * @var \Petrocki\IofXmlPhp\ServiceType[] $service
     */
    private $service = [
        
    ];

    /**
     * URLs to various types of additional information regarding the event, e.g. event website or result list.
     *
     * @var \Petrocki\IofXmlPhp\EventURLType[] $uRL
     */
    private $uRL = [
        
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
     * Gets as raceNumber
     *
     * The ordinal number of the race in the multi-race event, starting at 1.
     *
     * @return int
     */
    public function getRaceNumber()
    {
        return $this->raceNumber;
    }

    /**
     * Sets a new raceNumber
     *
     * The ordinal number of the race in the multi-race event, starting at 1.
     *
     * @param int $raceNumber
     * @return self
     */
    public function setRaceNumber($raceNumber)
    {
        $this->raceNumber = $raceNumber;
        return $this;
    }

    /**
     * Gets as name
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
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * The start time for the first starting competitor of the race.
     *
     * @return \Petrocki\IofXmlPhp\DateAndOptionalTimeType
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * The start time for the first starting competitor of the race.
     *
     * @param \Petrocki\IofXmlPhp\DateAndOptionalTimeType $startTime
     * @return self
     */
    public function setStartTime(?\Petrocki\IofXmlPhp\DateAndOptionalTimeType $startTime = null)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * The time when the finish closes.
     *
     * @return \Petrocki\IofXmlPhp\DateAndOptionalTimeType
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * The time when the finish closes.
     *
     * @param \Petrocki\IofXmlPhp\DateAndOptionalTimeType $endTime
     * @return self
     */
    public function setEndTime(?\Petrocki\IofXmlPhp\DateAndOptionalTimeType $endTime = null)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the race. This element overrides the Status element of the parent Event element.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the race. This element overrides the Status element of the parent Event element.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as classification
     *
     * The classification or level of the race. This element overrides the Classification element of the parent Event element.
     *
     * @return string
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Sets a new classification
     *
     * The classification or level of the race. This element overrides the Classification element of the parent Event element.
     *
     * @param string $classification
     * @return self
     */
    public function setClassification($classification)
    {
        $this->classification = $classification;
        return $this;
    }

    /**
     * Gets as position
     *
     * The geographical location of the arena.
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
     * The geographical location of the arena.
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
     * Adds as discipline
     *
     * @return self
     * @param string $discipline
     */
    public function addToDiscipline($discipline)
    {
        $this->discipline[] = $discipline;
        return $this;
    }

    /**
     * isset discipline
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscipline($index)
    {
        return isset($this->discipline[$index]);
    }

    /**
     * unset discipline
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscipline($index)
    {
        unset($this->discipline[$index]);
    }

    /**
     * Gets as discipline
     *
     * @return string[]
     */
    public function getDiscipline()
    {
        return $this->discipline;
    }

    /**
     * Sets a new discipline
     *
     * @param string $discipline
     * @return self
     */
    public function setDiscipline(?array $discipline = null)
    {
        $this->discipline = $discipline;
        return $this;
    }

    /**
     * Adds as organiser
     *
     * The organisations that organise the event.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\OrganisationType $organiser
     */
    public function addToOrganiser(\Petrocki\IofXmlPhp\OrganisationType $organiser)
    {
        $this->organiser[] = $organiser;
        return $this;
    }

    /**
     * isset organiser
     *
     * The organisations that organise the event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrganiser($index)
    {
        return isset($this->organiser[$index]);
    }

    /**
     * unset organiser
     *
     * The organisations that organise the event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrganiser($index)
    {
        unset($this->organiser[$index]);
    }

    /**
     * Gets as organiser
     *
     * The organisations that organise the event.
     *
     * @return \Petrocki\IofXmlPhp\OrganisationType[]
     */
    public function getOrganiser()
    {
        return $this->organiser;
    }

    /**
     * Sets a new organiser
     *
     * The organisations that organise the event.
     *
     * @param \Petrocki\IofXmlPhp\OrganisationType[] $organiser
     * @return self
     */
    public function setOrganiser(?array $organiser = null)
    {
        $this->organiser = $organiser;
        return $this;
    }

    /**
     * Adds as official
     *
     * The main officials of the event, e.g. course setter and event president.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\RoleType $official
     */
    public function addToOfficial(\Petrocki\IofXmlPhp\RoleType $official)
    {
        $this->official[] = $official;
        return $this;
    }

    /**
     * isset official
     *
     * The main officials of the event, e.g. course setter and event president.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOfficial($index)
    {
        return isset($this->official[$index]);
    }

    /**
     * unset official
     *
     * The main officials of the event, e.g. course setter and event president.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOfficial($index)
    {
        unset($this->official[$index]);
    }

    /**
     * Gets as official
     *
     * The main officials of the event, e.g. course setter and event president.
     *
     * @return \Petrocki\IofXmlPhp\RoleType[]
     */
    public function getOfficial()
    {
        return $this->official;
    }

    /**
     * Sets a new official
     *
     * The main officials of the event, e.g. course setter and event president.
     *
     * @param \Petrocki\IofXmlPhp\RoleType[] $official
     * @return self
     */
    public function setOfficial(?array $official = null)
    {
        $this->official = $official;
        return $this;
    }

    /**
     * Adds as service
     *
     * The services available for the race, e.g. accomodation and transport.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\ServiceType $service
     */
    public function addToService(\Petrocki\IofXmlPhp\ServiceType $service)
    {
        $this->service[] = $service;
        return $this;
    }

    /**
     * isset service
     *
     * The services available for the race, e.g. accomodation and transport.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetService($index)
    {
        return isset($this->service[$index]);
    }

    /**
     * unset service
     *
     * The services available for the race, e.g. accomodation and transport.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetService($index)
    {
        unset($this->service[$index]);
    }

    /**
     * Gets as service
     *
     * The services available for the race, e.g. accomodation and transport.
     *
     * @return \Petrocki\IofXmlPhp\ServiceType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * The services available for the race, e.g. accomodation and transport.
     *
     * @param \Petrocki\IofXmlPhp\ServiceType[] $service
     * @return self
     */
    public function setService(?array $service = null)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * Adds as uRL
     *
     * URLs to various types of additional information regarding the event, e.g. event website or result list.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\EventURLType $uRL
     */
    public function addToURL(\Petrocki\IofXmlPhp\EventURLType $uRL)
    {
        $this->uRL[] = $uRL;
        return $this;
    }

    /**
     * isset uRL
     *
     * URLs to various types of additional information regarding the event, e.g. event website or result list.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetURL($index)
    {
        return isset($this->uRL[$index]);
    }

    /**
     * unset uRL
     *
     * URLs to various types of additional information regarding the event, e.g. event website or result list.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetURL($index)
    {
        unset($this->uRL[$index]);
    }

    /**
     * Gets as uRL
     *
     * URLs to various types of additional information regarding the event, e.g. event website or result list.
     *
     * @return \Petrocki\IofXmlPhp\EventURLType[]
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * URLs to various types of additional information regarding the event, e.g. event website or result list.
     *
     * @param \Petrocki\IofXmlPhp\EventURLType[] $uRL
     * @return self
     */
    public function setURL(?array $uRL = null)
    {
        $this->uRL = $uRL;
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

