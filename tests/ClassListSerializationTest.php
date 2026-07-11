<?php

namespace IofXmlPhp\Tests;

/**
 * @internal
 *
 * @coversNothing
 */
class ClassListSerializationTest extends AbstractIofXmlTestCase
{
    public function testSerializesClassList(): void
    {
        $original = $this->parser->parseClassList(file_get_contents(__DIR__.'/fixtures/ClassList.xml'));
        $xml = $this->serializer->serializeClassList($original);

        $this->assertValidIofXml($xml);

        $reparsed = $this->parser->parseClassList($xml);
        $this->assertCount(2, $reparsed->getClass());
        $this->assertSame('Men Open', $reparsed->getClass()[0]->getName());
        $this->assertSame('Women Open', $reparsed->getClass()[1]->getName());
    }

    public function testSerializesClassListIndividualStep1(): void
    {
        $original = $this->parser->parseClassList(file_get_contents(__DIR__.'/fixtures/ClassList_Individual_Step1.xml'));
        $xml = $this->serializer->serializeClassList($original);

        $this->assertValidIofXml($xml);

        $reparsed = $this->parser->parseClassList($xml);
        $this->assertCount(2, $reparsed->getClass());
        $this->assertSame('Men Open', $reparsed->getClass()[0]->getName());
    }

    public function testSerializesClassListRelayStep1(): void
    {
        $original = $this->parser->parseClassList(file_get_contents(__DIR__.'/fixtures/ClassList_Relay_Step1.xml'));
        $xml = $this->serializer->serializeClassList($original);

        $this->assertValidIofXml($xml);

        $reparsed = $this->parser->parseClassList($xml);
        $this->assertCount(2, $reparsed->getClass());
        $this->assertSame('Men Open', $reparsed->getClass()[0]->getName());
        $this->assertSame('Women Open', $reparsed->getClass()[1]->getName());
    }
}
