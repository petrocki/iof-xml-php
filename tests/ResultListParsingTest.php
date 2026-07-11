<?php

namespace Petrocki\IofXmlPhp\Tests;

/**
 * @internal
 *
 * @coversNothing
 */
class ResultListParsingTest extends AbstractIofXmlTestCase
{
    public function testParsesResultList1Individual(): void
    {
        $xml = file_get_contents(__DIR__.'/fixtures/ResultList1.xml');

        $resultList = $this->parser->parseResultList($xml);

        $this->assertSame('Example event', $resultList->getEvent()->getName());
        $this->assertSame('Complete', $resultList->getStatus());
        $this->assertCount(2, $resultList->getClassResult());
        $this->assertSame('Men Elite', $resultList->getClassResult()[0]->getClass()->getName());
        $this->assertSame('Wood', $resultList->getClassResult()[0]->getPersonResult()[0]->getPerson()->getName()->getFamily());
    }

    public function testParsesResultList2Relay(): void
    {
        $xml = file_get_contents(__DIR__.'/fixtures/ResultList2.xml');

        $resultList = $this->parser->parseResultList($xml);

        $this->assertSame('Example event', $resultList->getEvent()->getName());
        $this->assertSame('Complete', $resultList->getStatus());
        $this->assertCount(1, $resultList->getClassResult());
        $this->assertSame('Open', $resultList->getClassResult()[0]->getClass()->getName());
        $this->assertSame('Forest Vagabonds 1', $resultList->getClassResult()[0]->getTeamResult()[0]->getName());
        $this->assertSame('Reid', $resultList->getClassResult()[0]->getTeamResult()[0]->getTeamMemberResult()[0]->getPerson()->getName()->getFamily());
    }

    public function testParsesResultList3MultiRace(): void
    {
        $xml = file_get_contents(__DIR__.'/fixtures/ResultList3.xml');

        $resultList = $this->parser->parseResultList($xml);

        $this->assertSame('Example event', $resultList->getEvent()->getName());
        $this->assertSame('Complete', $resultList->getStatus());
        $this->assertCount(2, $resultList->getEvent()->getRace());
        $this->assertCount(1, $resultList->getClassResult());
        $this->assertSame('Men Elite', $resultList->getClassResult()[0]->getClass()->getName());
    }

    public function testParsesResultList4WithExtensions(): void
    {
        $xml = file_get_contents(__DIR__.'/fixtures/ResultList4.xml');

        $resultList = $this->parser->parseResultList($xml);

        $this->assertSame('Example event', $resultList->getEvent()->getName());
        $this->assertSame('Complete', $resultList->getStatus());
        $this->assertCount(1, $resultList->getClassResult());
        $this->assertSame('Men Elite', $resultList->getClassResult()[0]->getClass()->getName());
        $this->assertSame('Wood', $resultList->getClassResult()[0]->getPersonResult()[0]->getPerson()->getName()->getFamily());
    }
}
