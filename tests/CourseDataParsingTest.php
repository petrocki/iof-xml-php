<?php

namespace IofXmlPhp\Tests;

/**
 * @internal
 *
 * @coversNothing
 */
class CourseDataParsingTest extends AbstractIofXmlTestCase
{
    public function testParsesCourseDataIndividual(): void
    {
        $xml = file_get_contents(__DIR__.'/fixtures/CourseData_Individual_Step2.xml');

        $courseData = $this->parser->parseCourseData($xml);

        $this->assertSame('Example event', $courseData->getEvent()->getName());
        $this->assertCount(1, $courseData->getRaceCourseData());
        $raceCourseData = $courseData->getRaceCourseData()[0];
        $this->assertCount(2, $raceCourseData->getCourse());
        $this->assertSame('A', $raceCourseData->getCourse()[0]->getName());
        $this->assertSame(2960.0, $raceCourseData->getCourse()[0]->getLength());
    }

    public function testParsesCourseDataRelay(): void
    {
        $xml = file_get_contents(__DIR__.'/fixtures/CourseData_Relay_Step2.xml');

        $courseData = $this->parser->parseCourseData($xml);

        $this->assertSame('Example event', $courseData->getEvent()->getName());
        $this->assertCount(1, $courseData->getRaceCourseData());
        $raceCourseData = $courseData->getRaceCourseData()[0];
        $this->assertCount(3, $raceCourseData->getCourse());
        $this->assertSame('A', $raceCourseData->getCourse()[0]->getName());
        $this->assertSame(1770.0, $raceCourseData->getCourse()[0]->getLength());
    }
}
