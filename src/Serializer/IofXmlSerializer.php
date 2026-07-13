<?php

namespace IofXmlPhp\Serializer;

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
use JMS\Serializer\SerializerInterface;

class IofXmlSerializer
{
    private SerializerInterface $serializer;

    public function __construct(?SerializerInterface $serializer = null)
    {
        $this->serializer = $serializer ?? SerializerFactory::create();
    }

    public function serializeEntryList(EntryList $entryList): string
    {
        return $this->serializer->serialize($entryList, 'xml');
    }

    public function serializeStartList(StartList $startList): string
    {
        return $this->serializer->serialize($startList, 'xml');
    }

    public function serializeResultList(ResultList $resultList): string
    {
        return $this->serializer->serialize($resultList, 'xml');
    }

    public function serializeCourseData(CourseData $courseData): string
    {
        return $this->serializer->serialize($courseData, 'xml');
    }

    public function serializeClassList(ClassList $classList): string
    {
        return $this->serializer->serialize($classList, 'xml');
    }

    public function serializeCompetitorList(CompetitorList $competitorList): string
    {
        return $this->serializer->serialize($competitorList, 'xml');
    }

    public function serializeOrganisationList(OrganisationList $organisationList): string
    {
        return $this->serializer->serialize($organisationList, 'xml');
    }

    public function serializeEventList(EventList $eventList): string
    {
        return $this->serializer->serialize($eventList, 'xml');
    }

    public function serializeServiceRequestList(ServiceRequestList $serviceRequestList): string
    {
        return $this->serializer->serialize($serviceRequestList, 'xml');
    }

    public function serializeControlCardList(ControlCardList $controlCardList): string
    {
        return $this->serializer->serialize($controlCardList, 'xml');
    }
}
