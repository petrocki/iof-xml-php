<?php

require __DIR__.'/../vendor/autoload.php';

use Petrocki\IofXmlPhp\Parser\IofXmlParser;

$parser = new IofXmlParser();
$xml = file_get_contents(__DIR__.'/../tests/fixtures/EntryList1.xml');

$entryList = $parser->parseEntryList($xml);

dump($entryList);
