<?php

namespace Pms\Bundle\ProjectsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamStudent
 */
class TeamStudent
{


    /**
     * @var integer
     */
    private $studentId;

    /**
     * @var integer
     */
    private $teamId;




    /**
     * Set studentId
     *
     * @param integer $studentId
     * @return TeamStudent
     */
    public function setStudentId($studentId)
    {
        $this->studentId = $studentId;
    
        return $this;
    }

    /**
     * Get studentId
     *
     * @return integer 
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * Set teamId
     *
     * @param integer $teamId
     * @return TeamStudent
     */
    public function setTeamId($teamId)
    {
        $this->teamId = $teamId;
    
        return $this;
    }

    /**
     * Get teamId
     *
     * @return integer 
     */
    public function getTeamId()
    {
        return $this->teamId;
    }
}
