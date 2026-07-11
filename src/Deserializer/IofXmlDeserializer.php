<?php

namespace IofXmlPhp\Deserializer;

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

class IofXmlDeserializer
{
    private SerializerInterface $serializer;

    public function __construct(?SerializerInterface $serializer = null)
    {
        $this->serializer = $serializer ?? SerializerFactory::create();
    }

    public function deserializeEntryList(string $xml): EntryList
    {
        return $this->serializer->deserialize($xml, EntryList::class, 'xml');
    }

    public function deserializeStartList(string $xml): StartList
    {
        return $this->serializer->deserialize($xml, StartList::class, 'xml');
    }

    public function deserializeResultList(string $xml): ResultList
    {
        return $this->serializer->deserialize($xml, ResultList::class, 'xml');
    }

    public function deserializeCourseData(string $xml): CourseData
    {
        return $this->serializer->deserialize($xml, CourseData::class, 'xml');
    }

    public function deserializeClassList(string $xml): ClassList
    {
        return $this->serializer->deserialize($xml, ClassList::class, 'xml');
    }

    public function deserializeCompetitorList(string $xml): CompetitorList
    {
        return $this->serializer->deserialize($xml, CompetitorList::class, 'xml');
    }

    public function deserializeOrganisationList(string $xml): OrganisationList
    {
        return $this->serializer->deserialize($xml, OrganisationList::class, 'xml');
    }

    public function deserializeEventList(string $xml): EventList
    {
        return $this->serializer->deserialize($xml, EventList::class, 'xml');
    }

    public function deserializeServiceRequestList(string $xml): ServiceRequestList
    {
        return $this->serializer->deserialize($xml, ServiceRequestList::class, 'xml');
    }

    public function deserializeControlCardList(string $xml): ControlCardList
    {
        return $this->serializer->deserialize($xml, ControlCardList::class, 'xml');
    }
}
