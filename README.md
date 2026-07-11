# IOF XML PHP

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
use Petrocki\IofXmlPhp\Parser\IofXmlParser;

$parser = new IofXmlParser();
$entryList = $parser->parseEntryList(file_get_contents('entry-list.xml'));

echo $entryList->getEvent()->getName();
```

### Serializing (PHP objects → XML)

```php
use Petrocki\IofXmlPhp\Serializer\IofXmlSerializer;

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
