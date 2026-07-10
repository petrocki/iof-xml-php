<?php

namespace Petrocki\IofXmlPhp\Serializer;

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

class SerializerFactory
{
    public static function create(): Serializer
    {
        return SerializerBuilder::create()
            ->addMetadataDir(
                __DIR__ . '/../Metadata',
                'Petrocki\IofXmlPhp\Model'
            )
            ->configureHandlers(function (HandlerRegistryInterface $registry) {
                $registry->registerSubscribingHandler(
                    new BaseTypesHandler()
                );
            })
            ->build()
        ;
    }
}