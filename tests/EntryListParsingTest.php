<?php

use Petrocki\IofXmlPhp\Parser\IofXmlParser;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class EntryListParsingTest extends TestCase
{
    public function testParsesEntryList1(): void
    {
        $parser = new IofXmlParser();
        $xml = file_get_contents(__DIR__.'/fixtures/EntryList1.xml');

        $entryList = $parser->parseEntryList($xml);

        $this->assertSame('Example event', $entryList->getEvent()->getName());
        $this->assertCount(3, $entryList->getPersonEntry());
        $this->assertSame('Wood', $entryList->getPersonEntry()[0]->getPerson()->getName()->getFamily());
        $this->assertSame('794021', (string) $entryList->getPersonEntry()[0]->getControlCard()[0]);
    }
}
