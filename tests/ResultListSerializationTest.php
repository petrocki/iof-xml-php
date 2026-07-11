<?php

namespace IofXmlPhp\Tests;

/**
 * @internal
 *
 * @coversNothing
 */
class ResultListSerializationTest extends AbstractIofXmlTestCase
{
    public function testSerializesResultList1Individual(): void
    {
        $original = $this->parser->parseResultList(file_get_contents(__DIR__.'/fixtures/ResultList1.xml'));
        $xml = $this->serializer->serializeResultList($original);

        $this->assertValidIofXml($xml);

        $reparsed = $this->parser->parseResultList($xml);
        $this->assertSame('Example event', $reparsed->getEvent()->getName());
        $this->assertSame('Complete', $reparsed->getStatus());
        $this->assertCount(2, $reparsed->getClassResult());
        $this->assertSame('Men Elite', $reparsed->getClassResult()[0]->getClass()->getName());
        $this->assertSame('Wood', $reparsed->getClassResult()[0]->getPersonResult()[0]->getPerson()->getName()->getFamily());
    }

    public function testSerializesResultList2Relay(): void
    {
        $original = $this->parser->parseResultList(file_get_contents(__DIR__.'/fixtures/ResultList2.xml'));
        $xml = $this->serializer->serializeResultList($original);

        $this->assertValidIofXml($xml);

        $reparsed = $this->parser->parseResultList($xml);
        $this->assertSame('Example event', $reparsed->getEvent()->getName());
        $this->assertSame('Open', $reparsed->getClassResult()[0]->getClass()->getName());
        $this->assertSame('Forest Vagabonds 1', $reparsed->getClassResult()[0]->getTeamResult()[0]->getName());
    }

    public function testSerializesResultList3MultiRace(): void
    {
        $original = $this->parser->parseResultList(file_get_contents(__DIR__.'/fixtures/ResultList3.xml'));
        $xml = $this->serializer->serializeResultList($original);

        $this->assertValidIofXml($xml);

        $reparsed = $this->parser->parseResultList($xml);
        $this->assertSame('Example event', $reparsed->getEvent()->getName());
        $this->assertCount(2, $reparsed->getEvent()->getRace());
        $this->assertSame('Men Elite', $reparsed->getClassResult()[0]->getClass()->getName());
    }

    public function testSerializesResultList4WithExtensions(): void
    {
        $original = $this->parser->parseResultList(file_get_contents(__DIR__.'/fixtures/ResultList4.xml'));
        $xml = $this->serializer->serializeResultList($original);

        $this->assertValidIofXml($xml);

        $reparsed = $this->parser->parseResultList($xml);
        $this->assertSame('Example event', $reparsed->getEvent()->getName());
        $this->assertSame('Men Elite', $reparsed->getClassResult()[0]->getClass()->getName());
        $this->assertSame('Wood', $reparsed->getClassResult()[0]->getPersonResult()[0]->getPerson()->getName()->getFamily());
    }
}
