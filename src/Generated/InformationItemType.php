<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing InformationItemType
 *
 * Defines a general-purpose information object containing a title and content.
 * XSD Type: InformationItem
 */
class InformationItemType
{
    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * A short summary of the information.
     *
     * @var string $title
     */
    private $title = null;

    /**
     * The information in detailed form.
     *
     * @var string $content
     */
    private $content = null;

    /**
     * Gets as modifyTime
     *
     * @return \DateTime
     */
    public function getModifyTime()
    {
        return $this->modifyTime;
    }

    /**
     * Sets a new modifyTime
     *
     * @param \DateTime $modifyTime
     * @return self
     */
    public function setModifyTime(\DateTime $modifyTime)
    {
        $this->modifyTime = $modifyTime;
        return $this;
    }

    /**
     * Gets as title
     *
     * A short summary of the information.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A short summary of the information.
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as content
     *
     * The information in detailed form.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * The information in detailed form.
     *
     * @param string $content
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }
}

