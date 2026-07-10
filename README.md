# IOF XML PHP
PHP model classes and parser for the IOF XML 3.0 data standard

### Docker usage

Build image:
```
docker build -t iof-xml-php:current .
```

Use bash in the container:
```
docker run -it -v "$(pwd):/var/www/iof-xml-php" iof-xml-php:current bash
```

The generated model classes are already included, to regenerate them in the container:
```
vendor/bin/xsd2php convert config/xsd2php.yaml resources/IOF.xsd
```