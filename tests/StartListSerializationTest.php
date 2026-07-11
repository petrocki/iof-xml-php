<?php

namespace Petrocki\IofXmlPhp\Tests;

/**
 * @internal
 *
 * @coversNothing
 */
class StartListSerializationTest extends AbstractIofXmlTestCase
{
    public function testSerializesStartList1Individual(): void
    {
        $original = $this->parser->parseStartList(file_get_contents(__DIR__.'/fixtures/StartList1.xml'));
        $xml = $this->serializer->serializeStartList($original);

        $this->assertValidIofXml($xml);

        $reparsed = $this->parser->parseStartList($xml);
        $this->assertSame('Example event', $reparsed->getEvent()->getName());
        $this->assertCount(2, $reparsed->getClassStart());
        $this->assertSame('Men Elite', $reparsed->getClassStart()[0]->getClass()->getName());
        $this->assertSame('Wood', $reparsed->getClassStart()[0]->getPersonStart()[0]->getPerson()->getName()->getFamily());
    }

    public function testSerializesStartList2Relay(): void
    {
        $original = $this->parser->parseStartList(file_get_contents(__DIR__.'/fixtures/StartList2.xml'));
        $xml = $this->serializer->serializeStartList($original);

        $this->assertValidIofXml($xml);

        $reparsed = $this->parser->parseStartList($xml);
        $this->assertSame('Example event', $reparsed->getEvent()->getName());
        $this->assertCount(1, $reparsed->getClassStart());
        $this->assertSame('Open', $reparsed->getClassStart()[0]->getClass()->getName());
        $this->assertSame('Forest Vagabonds 1', $reparsed->getClassStart()[0]->getTeamStart()[0]->getName());
    }

    public function testSerializesStartListIndividualStep3(): void
    {
        $original = $this->parser->parseStartList(file_get_contents(__DIR__.'/fixtures/StartList_Individual_Step3.xml'));
        $xml = $this->serializer->serializeStartList($original);

        $this->assertValidIofXml($xml);

        $reparsed = $this->parser->parseStartList($xml);
        $this->assertSame('Example event', $reparsed->getEvent()->getName());
        $this->assertSame('Men Open', $reparsed->getClassStart()[0]->getClass()->getName());
    }

    public function testSerializesStartListRelayStep3(): void
    {
        $original = $this->parser->parseStartList(file_get_contents(__DIR__.'/fixtures/StartList_Relay_Step3.xml'));
        $xml = $this->serializer->serializeStartList($original);

        $this->assertValidIofXml($xml);

        $reparsed = $this->parser->parseStartList($xml);
        $this->assertSame('Example event', $reparsed->getEvent()->getName());
        $this->assertSame('Forest Vagabonds 1', $reparsed->getClassStart()[0]->getTeamStart()[0]->getName());
    }
}
