<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing MapType
 *
 * Map information, used in course setting software with regard to the "real" map.
 * XSD Type: Map
 */
class MapType
{
    /**
     * @var \Petrocki\IofXmlPhp\IdType $id
     */
    private $id = null;

    /**
     * The map image.
     *
     * @var \Petrocki\IofXmlPhp\ImageType $image
     */
    private $image = null;

    /**
     * The denominator of the scale of the map. 1:15000 should be represented as 15000.
     *
     * @var float $scale
     */
    private $scale = null;

    /**
     * The position of the map's top left corner given in the map's coordinate system, usually (0, 0).
     *
     * @var \Petrocki\IofXmlPhp\MapPositionType $mapPositionTopLeft
     */
    private $mapPositionTopLeft = null;

    /**
     * The position of the map's bottom right corner given in the map's coordinate system.
     *
     * @var \Petrocki\IofXmlPhp\MapPositionType $mapPositionBottomRight
     */
    private $mapPositionBottomRight = null;

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as id
     *
     * @return \Petrocki\IofXmlPhp\IdType
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param \Petrocki\IofXmlPhp\IdType $id
     * @return self
     */
    public function setId(?\Petrocki\IofXmlPhp\IdType $id = null)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as image
     *
     * The map image.
     *
     * @return \Petrocki\IofXmlPhp\ImageType
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets a new image
     *
     * The map image.
     *
     * @param \Petrocki\IofXmlPhp\ImageType $image
     * @return self
     */
    public function setImage(?\Petrocki\IofXmlPhp\ImageType $image = null)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Gets as scale
     *
     * The denominator of the scale of the map. 1:15000 should be represented as 15000.
     *
     * @return float
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Sets a new scale
     *
     * The denominator of the scale of the map. 1:15000 should be represented as 15000.
     *
     * @param float $scale
     * @return self
     */
    public function setScale($scale)
    {
        $this->scale = $scale;
        return $this;
    }

    /**
     * Gets as mapPositionTopLeft
     *
     * The position of the map's top left corner given in the map's coordinate system, usually (0, 0).
     *
     * @return \Petrocki\IofXmlPhp\MapPositionType
     */
    public function getMapPositionTopLeft()
    {
        return $this->mapPositionTopLeft;
    }

    /**
     * Sets a new mapPositionTopLeft
     *
     * The position of the map's top left corner given in the map's coordinate system, usually (0, 0).
     *
     * @param \Petrocki\IofXmlPhp\MapPositionType $mapPositionTopLeft
     * @return self
     */
    public function setMapPositionTopLeft(\Petrocki\IofXmlPhp\MapPositionType $mapPositionTopLeft)
    {
        $this->mapPositionTopLeft = $mapPositionTopLeft;
        return $this;
    }

    /**
     * Gets as mapPositionBottomRight
     *
     * The position of the map's bottom right corner given in the map's coordinate system.
     *
     * @return \Petrocki\IofXmlPhp\MapPositionType
     */
    public function getMapPositionBottomRight()
    {
        return $this->mapPositionBottomRight;
    }

    /**
     * Sets a new mapPositionBottomRight
     *
     * The position of the map's bottom right corner given in the map's coordinate system.
     *
     * @param \Petrocki\IofXmlPhp\MapPositionType $mapPositionBottomRight
     * @return self
     */
    public function setMapPositionBottomRight(\Petrocki\IofXmlPhp\MapPositionType $mapPositionBottomRight)
    {
        $this->mapPositionBottomRight = $mapPositionBottomRight;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * Container element for custom elements from other schemas.
     *
     * @return \Petrocki\IofXmlPhp\ExtensionsType
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Sets a new extensions
     *
     * Container element for custom elements from other schemas.
     *
     * @param \Petrocki\IofXmlPhp\ExtensionsType $extensions
     * @return self
     */
    public function setExtensions(?\Petrocki\IofXmlPhp\ExtensionsType $extensions = null)
    {
        $this->extensions = $extensions;
        return $this;
    }
}

