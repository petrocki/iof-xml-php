<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing MapPositionType
 *
 * Defines a position in a map's coordinate system.
 * XSD Type: MapPosition
 */
class MapPositionType
{
    /**
     * The number of units right of the center of the coordinate system.
     *
     * @var float $x
     */
    private $x = null;

    /**
     * The number of units below the center of the coordinate system.
     *
     * @var float $y
     */
    private $y = null;

    /**
     * The type of unit used.
     *
     * @var string $unit
     */
    private $unit = null;

    /**
     * Gets as x
     *
     * The number of units right of the center of the coordinate system.
     *
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Sets a new x
     *
     * The number of units right of the center of the coordinate system.
     *
     * @param float $x
     * @return self
     */
    public function setX($x)
    {
        $this->x = $x;
        return $this;
    }

    /**
     * Gets as y
     *
     * The number of units below the center of the coordinate system.
     *
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Sets a new y
     *
     * The number of units below the center of the coordinate system.
     *
     * @param float $y
     * @return self
     */
    public function setY($y)
    {
        $this->y = $y;
        return $this;
    }

    /**
     * Gets as unit
     *
     * The type of unit used.
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * The type of unit used.
     *
     * @param string $unit
     * @return self
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }
}

