<?php

namespace IofXmlPhp\Model;

/**
 * Class representing MapType
 *
 * Map information, used in course setting software with regard to the "real" map.
 * XSD Type: Map
 */
class MapType
{
    /**
     * @var \IofXmlPhp\Model\IdType $id
     */
    private $id = null;

    /**
     * The map image.
     *
     * @var \IofXmlPhp\Model\ImageType $image
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
     * @var \IofXmlPhp\Model\MapPositionType $mapPositionTopLeft
     */
    private $mapPositionTopLeft = null;

    /**
     * The position of the map's bottom right corner given in the map's coordinate system.
     *
     * @var \IofXmlPhp\Model\MapPositionType $mapPositionBottomRight
     */
    private $mapPositionBottomRight = null;

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as id
     *
     * @return \IofXmlPhp\Model\IdType
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param \IofXmlPhp\Model\IdType $id
     * @return self
     */
    public function setId(?\IofXmlPhp\Model\IdType $id = null)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as image
     *
     * The map image.
     *
     * @return \IofXmlPhp\Model\ImageType
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
     * @param \IofXmlPhp\Model\ImageType $image
     * @return self
     */
    public function setImage(?\IofXmlPhp\Model\ImageType $image = null)
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
     * @return \IofXmlPhp\Model\MapPositionType
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
     * @param \IofXmlPhp\Model\MapPositionType $mapPositionTopLeft
     * @return self
     */
    public function setMapPositionTopLeft(\IofXmlPhp\Model\MapPositionType $mapPositionTopLeft)
    {
        $this->mapPositionTopLeft = $mapPositionTopLeft;
        return $this;
    }

    /**
     * Gets as mapPositionBottomRight
     *
     * The position of the map's bottom right corner given in the map's coordinate system.
     *
     * @return \IofXmlPhp\Model\MapPositionType
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
     * @param \IofXmlPhp\Model\MapPositionType $mapPositionBottomRight
     * @return self
     */
    public function setMapPositionBottomRight(\IofXmlPhp\Model\MapPositionType $mapPositionBottomRight)
    {
        $this->mapPositionBottomRight = $mapPositionBottomRight;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * Container element for custom elements from other schemas.
     *
     * @return \IofXmlPhp\Model\ExtensionsType
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
     * @param \IofXmlPhp\Model\ExtensionsType $extensions
     * @return self
     */
    public function setExtensions(?\IofXmlPhp\Model\ExtensionsType $extensions = null)
    {
        $this->extensions = $extensions;
        return $this;
    }
}

