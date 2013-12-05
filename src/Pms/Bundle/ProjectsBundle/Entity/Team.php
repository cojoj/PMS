<?php

namespace Pms\Bundle\ProjectsBundle\Entity;

/**
 * Team
 */
class Team
{
    /**
     * @var integer
     */
    private $id;

    private $students;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->students = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add students
     *
     * @param \Pms\Bundle\ProjectsBundle\Entity\Student $students
     * @return Team
     */
    public function addStudent(\Pms\Bundle\ProjectsBundle\Entity\Student $students)
    {
        $this->students[] = $students;
    
        return $this;
    }

    /**
     * Remove students
     *
     * @param \Pms\Bundle\ProjectsBundle\Entity\Student $students
     */
    public function removeStudent(\Pms\Bundle\ProjectsBundle\Entity\Student $students)
    {
        $this->students->removeElement($students);
    }

    /**
     * Get students
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStudents()
    {
        return $this->students;
    }
    /**
     * @var \Pms\Bundle\ProjectsBundle\Entity\Project
     */
    private $project;


    /**
     * Set project
     *
     * @param \Pms\Bundle\ProjectsBundle\Entity\Project $project
     * @return Team
     */
    public function setProject(\Pms\Bundle\ProjectsBundle\Entity\Project $project = null)
    {
        $this->project = $project;
    
        return $this;
    }

    /**
     * Get project
     *
     * @return \Pms\Bundle\ProjectsBundle\Entity\Project 
     */
    public function getProject()
    {
        return $this->project;
    }
}