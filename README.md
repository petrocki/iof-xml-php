# IOF XML PHP

[![Latest Version](https://img.shields.io/packagist/v/petrocki/iof-xml-php)](https://packagist.org/packages/petrocki/iof-xml-php)

PHP parser and serializer for the [IOF XML 3.0](https://orienteering.sport/iof/it/data-standard-3-0/) data standard.

> ⚠️ **Development status:** This repository is currently under active development and is **not ready for production use**.

## Requirements

- PHP 8.3+

## Installation

```bash
composer require petrocki/iof-xml-php
```

## Usage

### Parsing (XML → PHP objects)

```php
use IofXmlPhp\Parser\IofXmlParser;

$parser = new IofXmlParser();
$entryList = $parser->parseEntryList(file_get_contents('entry-list.xml'));

echo $entryList->getEvent()->getName();
```

### Serializing (PHP objects → XML)

```php
use IofXmlPhp\Serializer\IofXmlSerializer;

$serializer = new IofXmlSerializer();
$xml = $serializer->serializeEntryList($entryList);
```

## Development

### Docker

Build image:

```bash
docker build -t iof-xml-php:current .
```

Use bash in the container:

```bash
docker run -it -v "$(pwd):/var/www/iof-xml-php" iof-xml-php:current bash
```

### Regenerating model classes

The classes in `src/Model/` and metadata in `src/Metadata/` are auto-generated from `resources/IOF.xsd`. Do not edit them manually. To regenerate after an XSD change:

```bash
vendor/bin/xsd2php convert config/xsd2php.yaml resources/IOF.xsd
```

### Running tests

```bash
composer phpunit
```

### Code style

```bash
composer cs-check
composer cs-fix
```

## Related

- [IOF XML 3.0 Data Standard](https://github.com/international-orienteering-federation/datastandard-v3) — official IOF repository with the XSD schema and documentation
- [IOF XML 3.0 for .NET / C#](https://github.com/international-orienteering-federation/Dotnet-Client-IOF.XML.V3) — official IOF client library with model classes and utilities
- [IOF XML 3.0 for Java / Kotlin](https://github.com/orienteering-oss/iof-xml) — community library with model classes and utilities
- [IOF XML 3.0 classes and helpers for GO](https://github.com/mikaello/go-iof-xml) — community library with model classes and utilities
