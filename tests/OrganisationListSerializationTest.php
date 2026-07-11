<?php

namespace Petrocki\IofXmlPhp\Tests;

/**
 * @internal
 *
 * @coversNothing
 */
class OrganisationListSerializationTest extends AbstractIofXmlTestCase
{
    public function testSerializesOrganisationList(): void
    {
        $original = $this->parser->parseOrganisationList(file_get_contents(__DIR__.'/fixtures/OrganisationList.xml'));
        $xml = $this->serializer->serializeOrganisationList($original);

        $this->assertValidIofXml($xml);

        $reparsed = $this->parser->parseOrganisationList($xml);
        $this->assertCount(4, $reparsed->getOrganisation());
        $this->assertSame('Super Fast Orienteers', $reparsed->getOrganisation()[0]->getName());
        $this->assertSame('SFO', $reparsed->getOrganisation()[0]->getShortName());
    }
}
