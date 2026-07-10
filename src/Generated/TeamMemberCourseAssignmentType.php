<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing TeamMemberCourseAssignmentType
 *
 * Element that connects a course with a relay team member. Courses should be present in the RaceCourseData element and are matched on course name and/or course family. Team members are matched by 1) BibNumber, 2) Leg and LegOrder, 3) EntryId.
 * XSD Type: TeamMemberCourseAssignment
 */
class TeamMemberCourseAssignmentType
{
    /**
     * The id corresponding to this person's entry in an EntryList.
     *
     * @var \Petrocki\IofXmlPhp\IdType $entryId
     */
    private $entryId = null;

    /**
     * The bib number of the person or the team that the person belongs to. Omit if the bib number is specified in the TeamCourseAssignment element.
     *
     * @var string $bibNumber
     */
    private $bibNumber = null;

    /**
     * For relay entries, the number of the leg that the person is taking part in.
     *
     * @var int $leg
     */
    private $leg = null;

    /**
     * Defines the person's starting order within a team at a parallel relay leg.
     *
     * @var int $legOrder
     */
    private $legOrder = null;

    /**
     * The name of the person.
     *
     * @var string $teamMemberName
     */
    private $teamMemberName = null;

    /**
     * The name of the course.
     *
     * @var string $courseName
     */
    private $courseName = null;

    /**
     * The family or group of forked courses that the course is part of.
     *
     * @var string $courseFamily
     */
    private $courseFamily = null;

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as entryId
     *
     * The id corresponding to this person's entry in an EntryList.
     *
     * @return \Petrocki\IofXmlPhp\IdType
     */
    public function getEntryId()
    {
        return $this->entryId;
    }

    /**
     * Sets a new entryId
     *
     * The id corresponding to this person's entry in an EntryList.
     *
     * @param \Petrocki\IofXmlPhp\IdType $entryId
     * @return self
     */
    public function setEntryId(?\Petrocki\IofXmlPhp\IdType $entryId = null)
    {
        $this->entryId = $entryId;
        return $this;
    }

    /**
     * Gets as bibNumber
     *
     * The bib number of the person or the team that the person belongs to. Omit if the bib number is specified in the TeamCourseAssignment element.
     *
     * @return string
     */
    public function getBibNumber()
    {
        return $this->bibNumber;
    }

    /**
     * Sets a new bibNumber
     *
     * The bib number of the person or the team that the person belongs to. Omit if the bib number is specified in the TeamCourseAssignment element.
     *
     * @param string $bibNumber
     * @return self
     */
    public function setBibNumber($bibNumber)
    {
        $this->bibNumber = $bibNumber;
        return $this;
    }

    /**
     * Gets as leg
     *
     * For relay entries, the number of the leg that the person is taking part in.
     *
     * @return int
     */
    public function getLeg()
    {
        return $this->leg;
    }

    /**
     * Sets a new leg
     *
     * For relay entries, the number of the leg that the person is taking part in.
     *
     * @param int $leg
     * @return self
     */
    public function setLeg($leg)
    {
        $this->leg = $leg;
        return $this;
    }

    /**
     * Gets as legOrder
     *
     * Defines the person's starting order within a team at a parallel relay leg.
     *
     * @return int
     */
    public function getLegOrder()
    {
        return $this->legOrder;
    }

    /**
     * Sets a new legOrder
     *
     * Defines the person's starting order within a team at a parallel relay leg.
     *
     * @param int $legOrder
     * @return self
     */
    public function setLegOrder($legOrder)
    {
        $this->legOrder = $legOrder;
        return $this;
    }

    /**
     * Gets as teamMemberName
     *
     * The name of the person.
     *
     * @return string
     */
    public function getTeamMemberName()
    {
        return $this->teamMemberName;
    }

    /**
     * Sets a new teamMemberName
     *
     * The name of the person.
     *
     * @param string $teamMemberName
     * @return self
     */
    public function setTeamMemberName($teamMemberName)
    {
        $this->teamMemberName = $teamMemberName;
        return $this;
    }

    /**
     * Gets as courseName
     *
     * The name of the course.
     *
     * @return string
     */
    public function getCourseName()
    {
        return $this->courseName;
    }

    /**
     * Sets a new courseName
     *
     * The name of the course.
     *
     * @param string $courseName
     * @return self
     */
    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;
        return $this;
    }

    /**
     * Gets as courseFamily
     *
     * The family or group of forked courses that the course is part of.
     *
     * @return string
     */
    public function getCourseFamily()
    {
        return $this->courseFamily;
    }

    /**
     * Sets a new courseFamily
     *
     * The family or group of forked courses that the course is part of.
     *
     * @param string $courseFamily
     * @return self
     */
    public function setCourseFamily($courseFamily)
    {
        $this->courseFamily = $courseFamily;
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

