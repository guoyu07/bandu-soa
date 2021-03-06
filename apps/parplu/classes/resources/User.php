<?php

namespace parplu\resources;

use kongossa\objects\Resource;

class User extends Resource {

    protected $id;
    protected $firstName;
    protected $lastName;
    protected $dateOfBirth;
    protected $emailAddress;
    protected $password;
    protected $dateCreated;
    protected $lastUpdated;
    
    protected function init() {
        parent::init();
        $this->internal[] = 'password';
    }
    
    protected function getRequiredCreateProperties() {
        $properties = array_keys($this->getProperties());;
        unset($properties['id']);
        return $properties;
    }
    
    protected function getRequiredUpdateProperties() {
        return array_keys($this->getProperties());
    }
    
    public function isValid($method) {
        foreach ($this->required[$method] as $property) {
            if (!isset($this->$getter())) {
                throw new \Exception("Missing Required Argument: $property");
            }
        }
        return true;
    }

}