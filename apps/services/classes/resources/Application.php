<?php

namespace parplu\resources;

use kongossa\objects;

class Application extends objects\Struct {
    
    protected $id;
    protected $name;
    protected $reference;
    protected $dateCreated;
    protected $lastUpdated;
    
    protected $users;
    
    protected function init() {
        parent::init();
        $this->users = array();
    }

    protected function getRequiredCreateProperties() {
        $properties = array_keys($this->getProperties());
        
        list($id) = array_keys($properties, 'id');
        unset($properties[$id]);
        
        list($applications) = array_keys($properties, 'users');
        unset($properties[$applications]);
        
        return $properties;
    }
    
    protected function getRequiredUpdateProperties() {
        return array_keys($this->getProperties());
    }

}