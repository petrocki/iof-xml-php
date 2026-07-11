<?php

namespace IofXmlPhp\Tests;

use IofXmlPhp\Deserializer\IofXmlDeserializer;
use IofXmlPhp\Serializer\IofXmlSerializer;
use PHPUnit\Framework\TestCase;

abstract class AbstractIofXmlTestCase extends TestCase
{
    protected IofXmlDeserializer $deserializer;
    protected IofXmlSerializer $serializer;

    protected function setUp(): void
    {
        $this->deserializer = new IofXmlDeserializer();
        $this->serializer = new IofXmlSerializer();
    }

    protected function assertValidIofXml(string $xml): void
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $this->assertTrue($dom->schemaValidate(__DIR__.'/../resources/IOF.xsd'));
    }
}
