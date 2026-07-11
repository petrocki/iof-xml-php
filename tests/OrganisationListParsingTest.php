<?php

namespace IofXmlPhp\Tests;

/**
 * @internal
 *
 * @coversNothing
 */
class OrganisationListParsingTest extends AbstractIofXmlTestCase
{
    public function testParsesOrganisationList(): void
    {
        $xml = file_get_contents(__DIR__.'/fixtures/OrganisationList.xml');

        $organisationList = $this->parser->parseOrganisationList($xml);

        $this->assertCount(4, $organisationList->getOrganisation());
        $this->assertSame('Super Fast Orienteers', $organisationList->getOrganisation()[0]->getName());
        $this->assertSame('SFO', $organisationList->getOrganisation()[0]->getShortName());
    }
}
