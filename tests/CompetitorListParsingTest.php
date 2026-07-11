<?php

namespace IofXmlPhp\Tests;

/**
 * @internal
 *
 * @coversNothing
 */
class CompetitorListParsingTest extends AbstractIofXmlTestCase
{
    public function testParsesCompetitorList(): void
    {
        $xml = file_get_contents(__DIR__.'/fixtures/CompetitorList.xml');

        $competitorList = $this->parser->parseCompetitorList($xml);

        $this->assertCount(4, $competitorList->getCompetitor());
        $this->assertSame('West', $competitorList->getCompetitor()[0]->getPerson()->getName()->getFamily());
        $this->assertSame('Unintentional Navigators', $competitorList->getCompetitor()[0]->getOrganisation()[0]->getName());
    }
}
