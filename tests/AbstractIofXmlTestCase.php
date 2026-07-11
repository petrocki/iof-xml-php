<?php

namespace Petrocki\IofXmlPhp\Tests;

use Petrocki\IofXmlPhp\Parser\IofXmlParser;
use Petrocki\IofXmlPhp\Serializer\IofXmlSerializer;
use PHPUnit\Framework\TestCase;

abstract class AbstractIofXmlTestCase extends TestCase
{
    protected IofXmlParser $parser;
    protected IofXmlSerializer $serializer;

    protected function setUp(): void
    {
        $this->parser = new IofXmlParser();
        $this->serializer = new IofXmlSerializer();
    }

    protected function assertValidIofXml(string $xml): void
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $this->assertTrue($dom->schemaValidate(__DIR__.'/../resources/IOF.xsd'));
    }
}
