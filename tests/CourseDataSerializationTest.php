<?php

namespace Petrocki\IofXmlPhp\Tests;

/**
 * @internal
 *
 * @coversNothing
 */
class CourseDataSerializationTest extends AbstractIofXmlTestCase
{
    public function testSerializesCourseDataIndividual(): void
    {
        $original = $this->parser->parseCourseData(file_get_contents(__DIR__.'/fixtures/CourseData_Individual_Step2.xml'));
        $xml = $this->serializer->serializeCourseData($original);

        $this->assertValidIofXml($xml);

        $reparsed = $this->parser->parseCourseData($xml);
        $this->assertSame('Example event', $reparsed->getEvent()->getName());
        $raceCourseData = $reparsed->getRaceCourseData()[0];
        $this->assertCount(2, $raceCourseData->getCourse());
        $this->assertSame('A', $raceCourseData->getCourse()[0]->getName());
        $this->assertSame(2960.0, $raceCourseData->getCourse()[0]->getLength());
    }

    public function testSerializesCourseDataRelay(): void
    {
        $original = $this->parser->parseCourseData(file_get_contents(__DIR__.'/fixtures/CourseData_Relay_Step2.xml'));
        $xml = $this->serializer->serializeCourseData($original);

        $this->assertValidIofXml($xml);

        $reparsed = $this->parser->parseCourseData($xml);
        $this->assertSame('Example event', $reparsed->getEvent()->getName());
        $raceCourseData = $reparsed->getRaceCourseData()[0];
        $this->assertCount(3, $raceCourseData->getCourse());
        $this->assertSame('A', $raceCourseData->getCourse()[0]->getName());
        $this->assertSame(1770.0, $raceCourseData->getCourse()[0]->getLength());
    }
}
