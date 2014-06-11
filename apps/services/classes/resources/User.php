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
    
    protected $applications;
        
    protected function init() {
        parent::init();
        $this->internal[] = 'required';
    }
    
    protected function getRequiredCreateProperties() {
        $properties = array_keys($this->getProperties());
        
        list($id) = array_keys($properties, 'id');
        unset($properties[$id]);
        
        list($applications) = array_keys($properties, 'applications');
        unset($properties[$applications]);
        
        return $properties;
    }
    
    protected function getRequiredUpdateProperties() {
        return array_keys($this->getProperties());
    }
    
}