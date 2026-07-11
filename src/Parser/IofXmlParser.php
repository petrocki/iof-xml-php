<?php

namespace IofXmlPhp\Parser;

use JMS\Serializer\SerializerInterface;
use IofXmlPhp\Internal\SerializerFactory;
use IofXmlPhp\Model\ClassList;
use IofXmlPhp\Model\CompetitorList;
use IofXmlPhp\Model\ControlCardList;
use IofXmlPhp\Model\CourseData;
use IofXmlPhp\Model\EntryList;
use IofXmlPhp\Model\EventList;
use IofXmlPhp\Model\OrganisationList;
use IofXmlPhp\Model\ResultList;
use IofXmlPhp\Model\ServiceRequestList;
use IofXmlPhp\Model\StartList;

class IofXmlParser
{
    private SerializerInterface $serializer;

    public function __construct(?SerializerInterface $serializer = null)
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
