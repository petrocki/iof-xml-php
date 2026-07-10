<?php

namespace Petrocki\IofXmlPhp\Parser;

use JMS\Serializer\Serializer;
use Petrocki\IofXmlPhp\Serializer\SerializerFactory;
use Petrocki\IofXmlPhp\Model\EntryList;
use Petrocki\IofXmlPhp\Model\StartList;
use Petrocki\IofXmlPhp\Model\ResultList;
use Petrocki\IofXmlPhp\Model\CourseData;
use Petrocki\IofXmlPhp\Model\ClassList;
use Petrocki\IofXmlPhp\Model\CompetitorList;
use Petrocki\IofXmlPhp\Model\OrganisationList;
use Petrocki\IofXmlPhp\Model\EventList;
use Petrocki\IofXmlPhp\Model\ServiceRequestList;
use Petrocki\IofXmlPhp\Model\ControlCardList;

class IofXmlParser
{
    private Serializer $serializer;

    public function __construct(?Serializer $serializer = null)
    {
        $this->serializer = $serializer ?? SerializerFactory::create();
    }

    public function parseEntryList(string $xml): EntryList
    {
        return $this->serializer->deserialize($xml, EntryList::class, 'xml');
    }

    public function parseStartList(string $xml): StartList
    {
        return $this->serializer->deserialize($xml, StartList::class, 'xml');
    }

    public function parseResultList(string $xml): ResultList
    {
        return $this->serializer->deserialize($xml, ResultList::class, 'xml');
    }

    public function parseCourseData(string $xml): CourseData
    {
        return $this->serializer->deserialize($xml, CourseData::class, 'xml');
    }

    public function parseClassList(string $xml): ClassList
    {
        return $this->serializer->deserialize($xml, ClassList::class, 'xml');
    }

    public function parseCompetitorList(string $xml): CompetitorList
    {
        return $this->serializer->deserialize($xml, CompetitorList::class, 'xml');
    }

    public function parseOrganisationList(string $xml): OrganisationList
    {
        return $this->serializer->deserialize($xml, OrganisationList::class, 'xml');
    }

    public function parseEventList(string $xml): EventList
    {
        return $this->serializer->deserialize($xml, EventList::class, 'xml');
    }

    public function parseServiceRequestList(string $xml): ServiceRequestList
    {
        return $this->serializer->deserialize($xml, ServiceRequestList::class, 'xml');
    }

    public function parseControlCardList(string $xml): ControlCardList
    {
        return $this->serializer->deserialize($xml, ControlCardList::class, 'xml');
    }
}