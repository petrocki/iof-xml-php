<?php

namespace IofXmlPhp\Factory;

use IofXmlPhp\Model\BaseMessageElementType;

final readonly class IofMessageFactory
{
    private const string IOF_VERSION = '3.0';

    public function __construct(
        private string $creator,
    ) {}

    /**
     * @template T of BaseMessageElementType
     *
     * @param class-string<T> $class
     *
     * @return T
     */
    public function create(string $class): BaseMessageElementType
    {
        $message = new $class();

        $message->setIofVersion(self::IOF_VERSION);
        $message->setCreateTime(new \DateTime());
        $message->setCreator($this->creator);

        return $message;
    }
}
