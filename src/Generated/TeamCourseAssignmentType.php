<?php

namespace Petrocki\IofXmlPhp;

/**
 * Class representing TeamCourseAssignmentType
 *
 * Element that connects a number of team members in a relay team to a number of courses. Teams are matched by 1) BibNumber, 2) TeamName+ClassName.
 * XSD Type: TeamCourseAssignment
 */
class TeamCourseAssignmentType
{
    /**
     * The bib number of the team.
     *
     * @var string $bibNumber
     */
    private $bibNumber = null;

    /**
     * The name of the team.
     *
     * @var string $teamName
     */
    private $teamName = null;

    /**
     * The name of the class that the team belongs to.
     *
     * @var string $className
     */
    private $className = null;

    /**
     * The assignment of courses to team members.
     *
     * @var \Petrocki\IofXmlPhp\TeamMemberCourseAssignmentType[] $teamMemberCourseAssignment
     */
    private $teamMemberCourseAssignment = [
        
    ];

    /**
     * Container element for custom elements from other schemas.
     *
     * @var \Petrocki\IofXmlPhp\ExtensionsType $extensions
     */
    private $extensions = null;

    /**
     * Gets as bibNumber
     *
     * The bib number of the team.
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
     * The bib number of the team.
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
     * Gets as teamName
     *
     * The name of the team.
     *
     * @return string
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * Sets a new teamName
     *
     * The name of the team.
     *
     * @param string $teamName
     * @return self
     */
    public function setTeamName($teamName)
    {
        $this->teamName = $teamName;
        return $this;
    }

    /**
     * Gets as className
     *
     * The name of the class that the team belongs to.
     *
     * @return string
     */
    public function getClassName()
    {
        return $this->className;
    }

    /**
     * Sets a new className
     *
     * The name of the class that the team belongs to.
     *
     * @param string $className
     * @return self
     */
    public function setClassName($className)
    {
        $this->className = $className;
        return $this;
    }

    /**
     * Adds as teamMemberCourseAssignment
     *
     * The assignment of courses to team members.
     *
     * @return self
     * @param \Petrocki\IofXmlPhp\TeamMemberCourseAssignmentType $teamMemberCourseAssignment
     */
    public function addToTeamMemberCourseAssignment(\Petrocki\IofXmlPhp\TeamMemberCourseAssignmentType $teamMemberCourseAssignment)
    {
        $this->teamMemberCourseAssignment[] = $teamMemberCourseAssignment;
        return $this;
    }

    /**
     * isset teamMemberCourseAssignment
     *
     * The assignment of courses to team members.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTeamMemberCourseAssignment($index)
    {
        return isset($this->teamMemberCourseAssignment[$index]);
    }

    /**
     * unset teamMemberCourseAssignment
     *
     * The assignment of courses to team members.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTeamMemberCourseAssignment($index)
    {
        unset($this->teamMemberCourseAssignment[$index]);
    }

    /**
     * Gets as teamMemberCourseAssignment
     *
     * The assignment of courses to team members.
     *
     * @return \Petrocki\IofXmlPhp\TeamMemberCourseAssignmentType[]
     */
    public function getTeamMemberCourseAssignment()
    {
        return $this->teamMemberCourseAssignment;
    }

    /**
     * Sets a new teamMemberCourseAssignment
     *
     * The assignment of courses to team members.
     *
     * @param \Petrocki\IofXmlPhp\TeamMemberCourseAssignmentType[] $teamMemberCourseAssignment
     * @return self
     */
    public function setTeamMemberCourseAssignment(?array $teamMemberCourseAssignment = null)
    {
        $this->teamMemberCourseAssignment = $teamMemberCourseAssignment;
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

