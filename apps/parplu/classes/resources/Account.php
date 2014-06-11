<?php

namespace parplu\resources;

use kongossa\objects\Resource;

class Account extends Resource {

    protected $id;
    protected $emailAddress;
    protected $firstName;
    protected $lastName;
    protected $dateOfBirth;
    protected $gender;
    protected $dateCreated;
    protected $lastUpdated;
    
    protected $personas;
    
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