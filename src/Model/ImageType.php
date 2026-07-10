<?php

namespace Petrocki\IofXmlPhp\Model;

/**
 * Class representing ImageType
 *
 *
 * XSD Type: Image
 */
class ImageType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The url to the image if it is stored externally (i.e. not as base64-encoded binary data).
     *
     * @var string $url
     */
    private $url = null;

    /**
     * The type of the image file, e.g. image/jpeg. Refer to https://www.iana.org/assignments/media-types/media-types.xhtml#image for available media types.
     *
     * @var string $mediaType
     */
    private $mediaType = null;

    /**
     * The width of the image in pixels.
     *
     * @var int $width
     */
    private $width = null;

    /**
     * The height of the image in pixels.
     *
     * @var int $height
     */
    private $height = null;

    /**
     * The resolution of the image in dpi.
     *
     * @var float $resolution
     */
    private $resolution = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as url
     *
     * The url to the image if it is stored externally (i.e. not as base64-encoded binary data).
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * The url to the image if it is stored externally (i.e. not as base64-encoded binary data).
     *
     * @param string $url
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Gets as mediaType
     *
     * The type of the image file, e.g. image/jpeg. Refer to https://www.iana.org/assignments/media-types/media-types.xhtml#image for available media types.
     *
     * @return string
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }

    /**
     * Sets a new mediaType
     *
     * The type of the image file, e.g. image/jpeg. Refer to https://www.iana.org/assignments/media-types/media-types.xhtml#image for available media types.
     *
     * @param string $mediaType
     * @return self
     */
    public function setMediaType($mediaType)
    {
        $this->mediaType = $mediaType;
        return $this;
    }

    /**
     * Gets as width
     *
     * The width of the image in pixels.
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * The width of the image in pixels.
     *
     * @param int $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Gets as height
     *
     * The height of the image in pixels.
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * The height of the image in pixels.
     *
     * @param int $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Gets as resolution
     *
     * The resolution of the image in dpi.
     *
     * @return float
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Sets a new resolution
     *
     * The resolution of the image in dpi.
     *
     * @param float $resolution
     * @return self
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;
        return $this;
    }
}

