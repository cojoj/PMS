<?php

namespace Proxies\__CG__\Pms\Bundle\ProjectsBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Team extends \Pms\Bundle\ProjectsBundle\Entity\Team implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function addStudent(\Pms\Bundle\ProjectsBundle\Entity\Student $students)
    {
        $this->__load();
        return parent::addStudent($students);
    }

    public function removeStudent(\Pms\Bundle\ProjectsBundle\Entity\Student $students)
    {
        $this->__load();
        return parent::removeStudent($students);
    }

    public function getStudents()
    {
        $this->__load();
        return parent::getStudents();
    }

    public function setProject(\Pms\Bundle\ProjectsBundle\Entity\Project $project = NULL)
    {
        $this->__load();
        return parent::setProject($project);
    }

    public function getProject()
    {
        $this->__load();
        return parent::getProject();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'project', 'students');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}