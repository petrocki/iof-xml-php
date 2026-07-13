<?php

namespace IofXmlPhp\Internal;

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;

final class SerializerFactory
{
    public static function create(): SerializerInterface
    {
        return SerializerBuilder::create()
            ->addMetadataDir(
                __DIR__.'/../Metadata',
                'IofXmlPhp\Model'
            )
            ->configureHandlers(function (HandlerRegistryInterface $registry) {
                $registry->registerSubscribingHandler(new BaseTypesHandler());
                $registry->registerSubscribingHandler(new XmlSchemaDateHandler());
            })
            ->build()
        ;
    }
}
