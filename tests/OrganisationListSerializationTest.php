<?php

namespace IofXmlPhp\Tests;

/**
 * @internal
 *
 * @coversNothing
 */
class OrganisationListSerializationTest extends AbstractIofXmlTestCase
{
    public function testSerializesOrganisationList(): void
    {
        $original = $this->deserializer->deserializeOrganisationList(file_get_contents(__DIR__.'/fixtures/OrganisationList.xml'));
        $xml = $this->serializer->serializeOrganisationList($original);

        $this->assertValidIofXml($xml);

        $reparsed = $this->deserializer->deserializeOrganisationList($xml);
        $this->assertCount(4, $reparsed->getOrganisation());
        $this->assertSame('Super Fast Orienteers', $reparsed->getOrganisation()[0]->getName());
        $this->assertSame('SFO', $reparsed->getOrganisation()[0]->getShortName());
    }
}
