<?php

namespace Petrocki\IofXmlPhp\Tests;

/**
 * @internal
 *
 * @coversNothing
 */
class StartListParsingTest extends AbstractIofXmlTestCase
{
    public function testParsesStartList1Individual(): void
    {
        $xml = file_get_contents(__DIR__.'/fixtures/StartList1.xml');

        $startList = $this->parser->parseStartList($xml);

        $this->assertSame('Example event', $startList->getEvent()->getName());
        $this->assertCount(2, $startList->getClassStart());
        $this->assertSame('Men Elite', $startList->getClassStart()[0]->getClass()->getName());
        $this->assertSame('Wood', $startList->getClassStart()[0]->getPersonStart()[0]->getPerson()->getName()->getFamily());
    }

    public function testParsesStartList2Relay(): void
    {
        $xml = file_get_contents(__DIR__.'/fixtures/StartList2.xml');

        $startList = $this->parser->parseStartList($xml);

        $this->assertSame('Example event', $startList->getEvent()->getName());
        $this->assertCount(1, $startList->getClassStart());
        $this->assertSame('Open', $startList->getClassStart()[0]->getClass()->getName());
        $this->assertSame('Forest Vagabonds 1', $startList->getClassStart()[0]->getTeamStart()[0]->getName());
    }

    public function testParsesStartListIndividualStep3(): void
    {
        $xml = file_get_contents(__DIR__.'/fixtures/StartList_Individual_Step3.xml');

        $startList = $this->parser->parseStartList($xml);

        $this->assertSame('Example event', $startList->getEvent()->getName());
        $this->assertCount(1, $startList->getClassStart());
        $this->assertSame('Men Open', $startList->getClassStart()[0]->getClass()->getName());
        $this->assertSame('Wood', $startList->getClassStart()[0]->getPersonStart()[0]->getPerson()->getName()->getFamily());
    }

    public function testParsesStartListRelayStep3(): void
    {
        $xml = file_get_contents(__DIR__.'/fixtures/StartList_Relay_Step3.xml');

        $startList = $this->parser->parseStartList($xml);

        $this->assertSame('Example event', $startList->getEvent()->getName());
        $this->assertCount(1, $startList->getClassStart());
        $this->assertSame('Men Open', $startList->getClassStart()[0]->getClass()->getName());
        $this->assertSame('Forest Vagabonds 1', $startList->getClassStart()[0]->getTeamStart()[0]->getName());
    }
}
