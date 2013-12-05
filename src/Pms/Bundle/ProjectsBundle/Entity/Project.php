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
    /**
     * @var \DateTime
     */
    private $entry_date;

    /**
     * @var \DateTime
     */
    private $change_date;

    /**
     * @var strnig
     */
    private $comment;

    /**
     * @var \Pms\Bundle\ProjectsBundle\Entity\Team
     */
    private $team;


    /**
     * Set entry_date
     *
     * @param \DateTime $entryDate
     * @return Project
     */
    public function setEntryDate($entryDate)
    {
        $this->entry_date = $entryDate;
    
        return $this;
    }

    /**
     * Get entry_date
     *
     * @return \DateTime 
     */
    public function getEntryDate()
    {
        return $this->entry_date;
    }

    /**
     * Set change_date
     *
     * @param \DateTime $changeDate
     * @return Project
     */
    public function setChangeDate($changeDate)
    {
        $this->change_date = $changeDate;
    
        return $this;
    }

    /**
     * Get change_date
     *
     * @return \DateTime 
     */
    public function getChangeDate()
    {
        return $this->change_date;
    }

    /**
     * Set comment
     *
     * @param \strnig $comment
     * @return Project
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set team
     *
     * @param \Pms\Bundle\ProjectsBundle\Entity\Team $team
     * @return Project
     */
    public function setTeam(\Pms\Bundle\ProjectsBundle\Entity\Team $team = null)
    {
        $this->team = $team;
    
        return $this;
    }

    /**
     * Get team
     *
     * @return \Pms\Bundle\ProjectsBundle\Entity\Team 
     */
    public function getTeam()
    {
        return $this->team;
    }
}