<?php

namespace Petrocki\IofXmlPhp\Model;

/**
 * Class representing CourseControlType
 *
 * A control included in a particular course.
 * XSD Type: CourseControl
 */
class CourseControlType
{
    /**
     * The type of the control: (ordinary) control, start, finish, crossing point or end of marked route. If this attribute is specified, it overrides the corresponding Control's type.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * Non-broken sequences of course controls having randomOrder set to true can be visited in an arbitrary order.
     *
     * @var bool $randomOrder
     */
    private $randomOrder = null;

    /**
     * Any special instruction applied at the control, see the column G as defined in International Specification for Control Descriptions.
     *
     * @var string $specialInstruction
     */
    private $specialInstruction = null;

    /**
     * The length of the taped route in meters. Only to be specified if specialInstruction is TapedRoute or FunnelTapedRoute and if different from the value specified in LegLength element, i.e. when Special Instruction 13.1 is used.
     *
     * @var float $tapedRouteLength
     */
    private $tapedRouteLength = null;

    /**
     * @var \DateTime $modifyTime
     */
    private $modifyTime = null;

    /**
     * The code(s) of the control(s), without course-specific information. Specifying multiple control codes means that the competitor is required to punch one of the controls, but not all of them.
     *
     * @var string[] $control
     */
    private $control = [
        
    ];

    /**
     * Indicates the text shown next to the control circle, i.e. the control number.
     *
     * @var string $mapText
     */
    private $mapText = null;

    /**
     * Indicates the position of the center of the text relative to the center of the control circle.
     *
     * @var \Petrocki\IofXmlPhp\Model\MapPositionType $mapTextPosition
     */
    private $mapTextPosition = null;

    /**
     * The length in meters from the previous control on the course. For starts, this length may refer to the distance from the time start to the start flag.
     *
     * @var float $legLength
     */
    private $legLength = null;

    /**
     * The score of the control in score-O events.
     *
     * @var float $score
     */
    private $score = null;

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\Model\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as type
     *
     * The type of the control: (ordinary) control, start, finish, crossing point or end of marked route. If this attribute is specified, it overrides the corresponding Control's type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of the control: (ordinary) control, start, finish, crossing point or end of marked route. If this attribute is specified, it overrides the corresponding Control's type.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as randomOrder
     *
     * Non-broken sequences of course controls having randomOrder set to true can be visited in an arbitrary order.
     *
     * @return bool
     */
    public function getRandomOrder()
    {
        return $this->randomOrder;
    }

    /**
     * Sets a new randomOrder
     *
     * Non-broken sequences of course controls having randomOrder set to true can be visited in an arbitrary order.
     *
     * @param bool $randomOrder
     * @return self
     */
    public function setRandomOrder($randomOrder)
    {
        $this->randomOrder = $randomOrder;
        return $this;
    }

    /**
     * Gets as specialInstruction
     *
     * Any special instruction applied at the control, see the column G as defined in International Specification for Control Descriptions.
     *
     * @return string
     */
    public function getSpecialInstruction()
    {
        return $this->specialInstruction;
    }

    /**
     * Sets a new specialInstruction
     *
     * Any special instruction applied at the control, see the column G as defined in International Specification for Control Descriptions.
     *
     * @param string $specialInstruction
     * @return self
     */
    public function setSpecialInstruction($specialInstruction)
    {
        $this->specialInstruction = $specialInstruction;
        return $this;
    }

    /**
     * Gets as tapedRouteLength
     *
     * The length of the taped route in meters. Only to be specified if specialInstruction is TapedRoute or FunnelTapedRoute and if different from the value specified in LegLength element, i.e. when Special Instruction 13.1 is used.
     *
     * @return float
     */
    public function getTapedRouteLength()
    {
        return $this->tapedRouteLength;
    }

    /**
     * Sets a new tapedRouteLength
     *
     * The length of the taped route in meters. Only to be specified if specialInstruction is TapedRoute or FunnelTapedRoute and if different from the value specified in LegLength element, i.e. when Special Instruction 13.1 is used.
     *
     * @param float $tapedRouteLength
     * @return self
     */
    public function setTapedRouteLength($tapedRouteLength)
    {
        $this->tapedRouteLength = $tapedRouteLength;
        return $this;
    }

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
     * Adds as control
     *
     * The code(s) of the control(s), without course-specific information. Specifying multiple control codes means that the competitor is required to punch one of the controls, but not all of them.
     *
     * @return self
     * @param string $control
     */
    public function addToControl($control)
    {
        $this->control[] = $control;
        return $this;
    }

    /**
     * isset control
     *
     * The code(s) of the control(s), without course-specific information. Specifying multiple control codes means that the competitor is required to punch one of the controls, but not all of them.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetControl($index)
    {
        return isset($this->control[$index]);
    }

    /**
     * unset control
     *
     * The code(s) of the control(s), without course-specific information. Specifying multiple control codes means that the competitor is required to punch one of the controls, but not all of them.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetControl($index)
    {
        unset($this->control[$index]);
    }

    /**
     * Gets as control
     *
     * The code(s) of the control(s), without course-specific information. Specifying multiple control codes means that the competitor is required to punch one of the controls, but not all of them.
     *
     * @return string[]
     */
    public function getControl()
    {
        return $this->control;
    }

    /**
     * Sets a new control
     *
     * The code(s) of the control(s), without course-specific information. Specifying multiple control codes means that the competitor is required to punch one of the controls, but not all of them.
     *
     * @param string[] $control
     * @return self
     */
    public function setControl(array $control)
    {
        $this->control = $control;
        return $this;
    }

    /**
     * Gets as mapText
     *
     * Indicates the text shown next to the control circle, i.e. the control number.
     *
     * @return string
     */
    public function getMapText()
    {
        return $this->mapText;
    }

    /**
     * Sets a new mapText
     *
     * Indicates the text shown next to the control circle, i.e. the control number.
     *
     * @param string $mapText
     * @return self
     */
    public function setMapText($mapText)
    {
        $this->mapText = $mapText;
        return $this;
    }

    /**
     * Gets as mapTextPosition
     *
     * Indicates the position of the center of the text relative to the center of the control circle.
     *
     * @return \Petrocki\IofXmlPhp\Model\MapPositionType
     */
    public function getMapTextPosition()
    {
        return $this->mapTextPosition;
    }

    /**
     * Sets a new mapTextPosition
     *
     * Indicates the position of the center of the text relative to the center of the control circle.
     *
     * @param \Petrocki\IofXmlPhp\Model\MapPositionType $mapTextPosition
     * @return self
     */
    public function setMapTextPosition(?\Petrocki\IofXmlPhp\Model\MapPositionType $mapTextPosition = null)
    {
        $this->mapTextPosition = $mapTextPosition;
        return $this;
    }

    /**
     * Gets as legLength
     *
     * The length in meters from the previous control on the course. For starts, this length may refer to the distance from the time start to the start flag.
     *
     * @return float
     */
    public function getLegLength()
    {
        return $this->legLength;
    }

    /**
     * Sets a new legLength
     *
     * The length in meters from the previous control on the course. For starts, this length may refer to the distance from the time start to the start flag.
     *
     * @param float $legLength
     * @return self
     */
    public function setLegLength($legLength)
    {
        $this->legLength = $legLength;
        return $this;
    }

    /**
     * Gets as score
     *
     * The score of the control in score-O events.
     *
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Sets a new score
     *
     * The score of the control in score-O events.
     *
     * @param float $score
     * @return self
     */
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * Gets as extensions
     *
     * Container element for custom elements from other schemas.
     *
     * @return \Petrocki\IofXmlPhp\Model\ExtensionsType
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
     * @param \Petrocki\IofXmlPhp\Model\ExtensionsType $extensions
     * @return self
     */
    public function setExtensions(?\Petrocki\IofXmlPhp\Model\ExtensionsType $extensions = null)
    {
        $this->extensions = $extensions;
        return $this;
    }
}

