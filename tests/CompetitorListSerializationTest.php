<?php

namespace IofXmlPhp\Tests;

/**
 * @internal
 *
 * @coversNothing
 */
class CompetitorListSerializationTest extends AbstractIofXmlTestCase
{
    public function testSerializesCompetitorList(): void
    {
        $original = $this->parser->parseCompetitorList(file_get_contents(__DIR__.'/fixtures/CompetitorList.xml'));
        $xml = $this->serializer->serializeCompetitorList($original);

        $this->assertValidIofXml($xml);

        $reparsed = $this->parser->parseCompetitorList($xml);
        $this->assertCount(4, $reparsed->getCompetitor());
        $this->assertSame('West', $reparsed->getCompetitor()[0]->getPerson()->getName()->getFamily());
        $this->assertSame('Unintentional Navigators', $reparsed->getCompetitor()[0]->getOrganisation()[0]->getName());
    }
}
