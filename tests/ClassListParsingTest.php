<?php

namespace IofXmlPhp\Tests;

/**
 * @internal
 *
 * @coversNothing
 */
class ClassListParsingTest extends AbstractIofXmlTestCase
{
    public function testParsesClassList(): void
    {
        $xml = file_get_contents(__DIR__.'/fixtures/ClassList.xml');

        $classList = $this->parser->parseClassList($xml);

        $this->assertCount(2, $classList->getClass());
        $this->assertSame('Men Open', $classList->getClass()[0]->getName());
        $this->assertSame('Women Open', $classList->getClass()[1]->getName());
    }

    public function testParsesClassListIndividualStep1(): void
    {
        $xml = file_get_contents(__DIR__.'/fixtures/ClassList_Individual_Step1.xml');

        $classList = $this->parser->parseClassList($xml);

        $this->assertCount(2, $classList->getClass());
        $this->assertSame('Men Open', $classList->getClass()[0]->getName());
        $this->assertSame('Women Open', $classList->getClass()[1]->getName());
    }

    public function testParsesClassListRelayStep1(): void
    {
        $xml = file_get_contents(__DIR__.'/fixtures/ClassList_Relay_Step1.xml');

        $classList = $this->parser->parseClassList($xml);

        $this->assertCount(2, $classList->getClass());
        $this->assertSame('Men Open', $classList->getClass()[0]->getName());
        $this->assertSame('Women Open', $classList->getClass()[1]->getName());
    }
}
