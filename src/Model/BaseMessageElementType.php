<?php

namespace Petrocki\IofXmlPhp\Model;

/**
 * Class representing BaseMessageElementType
 *
 * The base message element that all message elements extend.
 * XSD Type: BaseMessageElement
 */
class BaseMessageElementType
{
    /**
     * The version of the IOF Interface Standard that the file conforms to.
     *
     * @var string $iofVersion
     */
    private $iofVersion = null;

    /**
     * The time when the file was created.
     *
     * @var \DateTime $createTime
     */
    private $createTime = null;

    /**
     * The name of the software that created the file.
     *
     * @var string $creator
     */
    private $creator = null;

    /**
     * Gets as iofVersion
     *
     * The version of the IOF Interface Standard that the file conforms to.
     *
     * @return string
     */
    public function getIofVersion()
    {
        return $this->iofVersion;
    }

    /**
     * Sets a new iofVersion
     *
     * The version of the IOF Interface Standard that the file conforms to.
     *
     * @param string $iofVersion
     * @return self
     */
    public function setIofVersion($iofVersion)
    {
        $this->iofVersion = $iofVersion;
        return $this;
    }

    /**
     * Gets as createTime
     *
     * The time when the file was created.
     *
     * @return \DateTime
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Sets a new createTime
     *
     * The time when the file was created.
     *
     * @param \DateTime $createTime
     * @return self
     */
    public function setCreateTime(\DateTime $createTime)
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * Gets as creator
     *
     * The name of the software that created the file.
     *
     * @return string
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Sets a new creator
     *
     * The name of the software that created the file.
     *
     * @param string $creator
     * @return self
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;
        return $this;
    }
}

