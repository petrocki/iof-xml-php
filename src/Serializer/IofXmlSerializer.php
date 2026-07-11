<?php

namespace Petrocki\IofXmlPhp\Serializer;

use JMS\Serializer\SerializerInterface;
use Petrocki\IofXmlPhp\Internal\SerializerFactory;
use Petrocki\IofXmlPhp\Model\ClassList;
use Petrocki\IofXmlPhp\Model\CompetitorList;
use Petrocki\IofXmlPhp\Model\ControlCardList;
use Petrocki\IofXmlPhp\Model\CourseData;
use Petrocki\IofXmlPhp\Model\EntryList;
use Petrocki\IofXmlPhp\Model\EventList;
use Petrocki\IofXmlPhp\Model\OrganisationList;
use Petrocki\IofXmlPhp\Model\ResultList;
use Petrocki\IofXmlPhp\Model\ServiceRequestList;
use Petrocki\IofXmlPhp\Model\StartList;

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
