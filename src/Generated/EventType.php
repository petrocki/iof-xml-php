<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing EventType
 *
 *
 * XSD Type: Event
 */
class EventType
{
    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * @var \Petrocki\IofXmlPhp\IdType $id
     */
    private $id = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * The start time for the first starting competitor of the event. If the event contains multiple races, this is the start time for the first starting competitor of the first race.
     *
     * @var \Petrocki\IofXmlPhp\DateAndOptionalTimeType $startTime
     */
    private $startTime = null;

    /**
     * The expected finish time for the last finishing competitor of the event. If the event contains multiple races, this is the expected finish time for the last finishing competitor of the last race.
     *
     * @var \Petrocki\IofXmlPhp\DateAndOptionalTimeType $endTime
     */
    private $endTime = null;

    /**
     * The status of the event. If the event is a multi-race event, and status is set per race, use the Status element of the Race element.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * The classification or level of the event. If the event is a multi-race event, and classification is set per race, use the Classification element of the Race element.
     *
     * @var string $classification
     */
    private $classification = null;

    /**
     * @var string[] $form
     */
    private $form = [
        
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
     * The classes that are available at the event.
     *
     * @var \Petrocki\IofXmlPhp\ClassType[] $class
     */
    private $class = [
        
    ];

    /**
     * An event consists of a number of races. The number is equal to the number of times a competitor should start. Most events contain a single race, and this elemend could then be omitted.
     *
     * @var \Petrocki\IofXmlPhp\RaceType[] $race
     */
    private $race = [
        
    ];

    /**
     * Address and contact information to the person or organisation which registers the entries for the event.
     *
     * @var \Petrocki\IofXmlPhp\EntryReceiverType $entryReceiver
     */
    private $entryReceiver = null;

    /**
     * The services available for the event, e.g. accomodation and transport.
     *
     * @var \Petrocki\IofXmlPhp\ServiceType[] $service
     */
    private $service = [
        
    ];

    /**
     * The bank account for the event.
     *
     * @var \Petrocki\IofXmlPhp\AccountType[] $account
     */
    private $account = [
        
    ];

    /**
     * URLs to various types of additional information regarding the event, e.g. event website or result list.
     *
     * @var \Petrocki\IofXmlPhp\EventURLType[] $uRL
     */
    private $uRL = [
        
    ];

    /**
     * Presents arbitrary data about the event, e.g. "Accommodation", "Local Attractions", and so on. Information present here should be defined well in advance of the event, in contrast to the 'News' element.
     *
     * @var \Petrocki\IofXmlPhp\InformationItemType[] $information
     */
    private $information = [
        
    ];

    /**
     * Defines the schedule of events that comprise the entire orienteering event, e.g. entry deadlines, banquet and social events, and awards ceremonies.
     *
     * @var \Petrocki\IofXmlPhp\ScheduleType[] $schedule
     */
    private $schedule = [
        
    ];

    /**
     * Presents "last minute information" about the event.
     *
     * @var \Petrocki\IofXmlPhp\InformationItemType[] $news
     */
    private $news = [
        
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
     * The start time for the first starting competitor of the event. If the event contains multiple races, this is the start time for the first starting competitor of the first race.
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
     * The start time for the first starting competitor of the event. If the event contains multiple races, this is the start time for the first starting competitor of the first race.
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
     * The expected finish time for the last finishing competitor of the event. If the event contains multiple races, this is the expected finish time for the last finishing competitor of the last race.
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
     * The expected finish time for the last finishing competitor of the event. If the event contains multiple races, this is the expected finish time for the last finishing competitor of the last race.
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
     * The status of the event. If the event is a multi-race event, and status is set per race, use the Status element of the Race element.
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
     * The status of the event. If the event is a multi-race event, and status is set per race, use the Status element of the Race element.
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
     * The classification or level of the event. If the event is a multi-race event, and classification is set per race, use the Classification element of the Race element.
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
     * The classification or level of the event. If the event is a multi-race event, and classification is set per race, use the Classification element of the Race element.
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
     * Adds as form
     *
     * @return self
     * @param string $form
     */
    public function addToForm($form)
    {
        $this->form[] = $form;
        return $this;
    }

    /**
     * isset form
     *
     * @param int|string $index
     * @return bool
     */
    public function issetForm($index)
    {
        return isset($this->form[$index]);
    }

    /**
     * unset form
     *
     * @param int|string $index
     * @return void
     */
    public function unsetForm($index)
    {
        unset($this->form[$index]);
    }

    /**
     * Gets as form
     *
     * @return string[]
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Sets a new form
     *
     * @param string $form
     * @return self
     */
    public function setForm(?array $form = null)
    {
        $this->form = $form;
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
     * Adds as class
     *
     * The classes that are available at the event.
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
     * The classes that are available at the event.
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
     * The classes that are available at the event.
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
     * The classes that are available at the event.
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
     * The classes that are available at the event.
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
     * Adds as race
     *
     * An event consists of a number of races. The number is equal to the number of times a competitor should start. Most events contain a single race, and this elemend could then be omitted.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\RaceType $race
     */
    public function addToRace(\Petrocki\IofXmlPhp\RaceType $race)
    {
        $this->race[] = $race;
        return $this;
    }

    /**
     * isset race
     *
     * An event consists of a number of races. The number is equal to the number of times a competitor should start. Most events contain a single race, and this elemend could then be omitted.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRace($index)
    {
        return isset($this->race[$index]);
    }

    /**
     * unset race
     *
     * An event consists of a number of races. The number is equal to the number of times a competitor should start. Most events contain a single race, and this elemend could then be omitted.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRace($index)
    {
        unset($this->race[$index]);
    }

    /**
     * Gets as race
     *
     * An event consists of a number of races. The number is equal to the number of times a competitor should start. Most events contain a single race, and this elemend could then be omitted.
     *
     * @return \Petrocki\IofXmlPhp\RaceType[]
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Sets a new race
     *
     * An event consists of a number of races. The number is equal to the number of times a competitor should start. Most events contain a single race, and this elemend could then be omitted.
     *
     * @param \Petrocki\IofXmlPhp\RaceType[] $race
     * @return self
     */
    public function setRace(?array $race = null)
    {
        $this->race = $race;
        return $this;
    }

    /**
     * Gets as entryReceiver
     *
     * Address and contact information to the person or organisation which registers the entries for the event.
     *
     * @return \Petrocki\IofXmlPhp\EntryReceiverType
     */
    public function getEntryReceiver()
    {
        return $this->entryReceiver;
    }

    /**
     * Sets a new entryReceiver
     *
     * Address and contact information to the person or organisation which registers the entries for the event.
     *
     * @param \Petrocki\IofXmlPhp\EntryReceiverType $entryReceiver
     * @return self
     */
    public function setEntryReceiver(?\Petrocki\IofXmlPhp\EntryReceiverType $entryReceiver = null)
    {
        $this->entryReceiver = $entryReceiver;
        return $this;
    }

    /**
     * Adds as service
     *
     * The services available for the event, e.g. accomodation and transport.
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
     * The services available for the event, e.g. accomodation and transport.
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
     * The services available for the event, e.g. accomodation and transport.
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
     * The services available for the event, e.g. accomodation and transport.
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
     * The services available for the event, e.g. accomodation and transport.
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
     * Adds as account
     *
     * The bank account for the event.
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
     * The bank account for the event.
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
     * The bank account for the event.
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
     * The bank account for the event.
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
     * The bank account for the event.
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
     * Adds as information
     *
     * Presents arbitrary data about the event, e.g. "Accommodation", "Local Attractions", and so on. Information present here should be defined well in advance of the event, in contrast to the 'News' element.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\InformationItemType $information
     */
    public function addToInformation(\Petrocki\IofXmlPhp\InformationItemType $information)
    {
        $this->information[] = $information;
        return $this;
    }

    /**
     * isset information
     *
     * Presents arbitrary data about the event, e.g. "Accommodation", "Local Attractions", and so on. Information present here should be defined well in advance of the event, in contrast to the 'News' element.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInformation($index)
    {
        return isset($this->information[$index]);
    }

    /**
     * unset information
     *
     * Presents arbitrary data about the event, e.g. "Accommodation", "Local Attractions", and so on. Information present here should be defined well in advance of the event, in contrast to the 'News' element.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInformation($index)
    {
        unset($this->information[$index]);
    }

    /**
     * Gets as information
     *
     * Presents arbitrary data about the event, e.g. "Accommodation", "Local Attractions", and so on. Information present here should be defined well in advance of the event, in contrast to the 'News' element.
     *
     * @return \Petrocki\IofXmlPhp\InformationItemType[]
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Sets a new information
     *
     * Presents arbitrary data about the event, e.g. "Accommodation", "Local Attractions", and so on. Information present here should be defined well in advance of the event, in contrast to the 'News' element.
     *
     * @param \Petrocki\IofXmlPhp\InformationItemType[] $information
     * @return self
     */
    public function setInformation(?array $information = null)
    {
        $this->information = $information;
        return $this;
    }

    /**
     * Adds as schedule
     *
     * Defines the schedule of events that comprise the entire orienteering event, e.g. entry deadlines, banquet and social events, and awards ceremonies.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\ScheduleType $schedule
     */
    public function addToSchedule(\Petrocki\IofXmlPhp\ScheduleType $schedule)
    {
        $this->schedule[] = $schedule;
        return $this;
    }

    /**
     * isset schedule
     *
     * Defines the schedule of events that comprise the entire orienteering event, e.g. entry deadlines, banquet and social events, and awards ceremonies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSchedule($index)
    {
        return isset($this->schedule[$index]);
    }

    /**
     * unset schedule
     *
     * Defines the schedule of events that comprise the entire orienteering event, e.g. entry deadlines, banquet and social events, and awards ceremonies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSchedule($index)
    {
        unset($this->schedule[$index]);
    }

    /**
     * Gets as schedule
     *
     * Defines the schedule of events that comprise the entire orienteering event, e.g. entry deadlines, banquet and social events, and awards ceremonies.
     *
     * @return \Petrocki\IofXmlPhp\ScheduleType[]
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Sets a new schedule
     *
     * Defines the schedule of events that comprise the entire orienteering event, e.g. entry deadlines, banquet and social events, and awards ceremonies.
     *
     * @param \Petrocki\IofXmlPhp\ScheduleType[] $schedule
     * @return self
     */
    public function setSchedule(?array $schedule = null)
    {
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * Adds as news
     *
     * Presents "last minute information" about the event.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\InformationItemType $news
     */
    public function addToNews(\Petrocki\IofXmlPhp\InformationItemType $news)
    {
        $this->news[] = $news;
        return $this;
    }

    /**
     * isset news
     *
     * Presents "last minute information" about the event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNews($index)
    {
        return isset($this->news[$index]);
    }

    /**
     * unset news
     *
     * Presents "last minute information" about the event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNews($index)
    {
        unset($this->news[$index]);
    }

    /**
     * Gets as news
     *
     * Presents "last minute information" about the event.
     *
     * @return \Petrocki\IofXmlPhp\InformationItemType[]
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * Sets a new news
     *
     * Presents "last minute information" about the event.
     *
     * @param \Petrocki\IofXmlPhp\InformationItemType[] $news
     * @return self
     */
    public function setNews(?array $news = null)
    {
        $this->news = $news;
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

