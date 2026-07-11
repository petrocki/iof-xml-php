<?php

namespace Petrocki\IofXmlPhp\Tests;

/**
 * @internal
 *
 * @coversNothing
 */
class EntryListSerializationTest extends AbstractIofXmlTestCase
{
    public function testSerializesEntryList1Individual(): void
    {
        $original = $this->parser->parseEntryList(file_get_contents(__DIR__.'/fixtures/EntryList1.xml'));
        $xml = $this->serializer->serializeEntryList($original);

        $this->assertValidIofXml($xml);

        $reparsed = $this->parser->parseEntryList($xml);
        $this->assertSame('Example event', $reparsed->getEvent()->getName());
        $this->assertCount(3, $reparsed->getPersonEntry());
        $this->assertSame('Wood', $reparsed->getPersonEntry()[0]->getPerson()->getName()->getFamily());
        $this->assertSame('794021', (string) $reparsed->getPersonEntry()[0]->getControlCard()[0]);
    }

    public function testSerializesEntryList2Relay(): void
    {
        $original = $this->parser->parseEntryList(file_get_contents(__DIR__.'/fixtures/EntryList2.xml'));
        $xml = $this->serializer->serializeEntryList($original);

        $this->assertValidIofXml($xml);

        $reparsed = $this->parser->parseEntryList($xml);
        $this->assertSame('Example event', $reparsed->getEvent()->getName());
        $this->assertCount(2, $reparsed->getTeamEntry());
        $this->assertSame('Forest Vagabonds 1', $reparsed->getTeamEntry()[0]->getName());
    }
}
