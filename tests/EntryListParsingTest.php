<?php

namespace Petrocki\IofXmlPhp\Tests;

/**
 * @internal
 *
 * @coversNothing
 */
class EntryListParsingTest extends AbstractIofXmlTestCase
{
    public function testParsesEntryList1(): void
    {
        $xml = file_get_contents(__DIR__.'/fixtures/EntryList1.xml');

        $entryList = $this->parser->parseEntryList($xml);

        $this->assertSame('Example event', $entryList->getEvent()->getName());
        $this->assertCount(3, $entryList->getPersonEntry());
        $this->assertSame('Wood', $entryList->getPersonEntry()[0]->getPerson()->getName()->getFamily());
        $this->assertSame('794021', (string) $entryList->getPersonEntry()[0]->getControlCard()[0]);
    }

    public function testParsesEntryList2Relay(): void
    {
        $xml = file_get_contents(__DIR__.'/fixtures/EntryList2.xml');

        $entryList = $this->parser->parseEntryList($xml);

        $this->assertSame('Example event', $entryList->getEvent()->getName());
        $this->assertCount(2, $entryList->getTeamEntry());
        $this->assertSame('Forest Vagabonds 1', $entryList->getTeamEntry()[0]->getName());
    }
}
