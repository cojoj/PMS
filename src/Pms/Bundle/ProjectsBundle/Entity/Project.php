<?php

namespace Pms\Bundle\ProjectsBundle\Entity;

/**
 * Project
 */
class Project
{
    /**
     * @var integer
     */
    private $id;

    /**
     *
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var Lecturer
     */
    private $lecturer;
    
    /**
     *
     * @var string
     */
    private $status;

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
     * Set subject
     *
     * @param string $subject
     * @return Project
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    
        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set lecturer
     *
     * @param Lecturer $lecturer
     * @return Project
     */
    public function setLecturer(Lecturer $lecturer = null)
    {
        $this->lecturer = $lecturer;
    
        return $this;
    }

    /**
     * Get lecturer
     *
     * @return Lecturer 
     */
    public function getLecturer()
    {
        return $this->lecturer;
    }
    
    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
     * @param string
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}