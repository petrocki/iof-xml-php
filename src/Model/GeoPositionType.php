<?php

namespace IofXmlPhp\Model;

/**
 * Class representing GeoPositionType
 *
 * Defines a geographical position, e.g. of a control.
 * XSD Type: GeoPosition
 */
class GeoPositionType
{
    /**
     * The longitude.
     *
     * @var float $lng
     */
    private $lng = null;

    /**
     * The latitude.
     *
     * @var float $lat
     */
    private $lat = null;

    /**
     * The altitude (elevation above sea level), in meters.
     *
     * @var float $alt
     */
    private $alt = null;

    /**
     * Gets as lng
     *
     * The longitude.
     *
     * @return float
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Sets a new lng
     *
     * The longitude.
     *
     * @param float $lng
     * @return self
     */
    public function setLng($lng)
    {
        $this->lng = $lng;
        return $this;
    }

    /**
     * Gets as lat
     *
     * The latitude.
     *
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Sets a new lat
     *
     * The latitude.
     *
     * @param float $lat
     * @return self
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
        return $this;
    }

    /**
     * Gets as alt
     *
     * The altitude (elevation above sea level), in meters.
     *
     * @return float
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Sets a new alt
     *
     * The altitude (elevation above sea level), in meters.
     *
     * @param float $alt
     * @return self
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;
        return $this;
    }
}

