<?php

namespace parplu\resources\managers;

use kongossa\objects\Resource;

class Institution extends Resource {
    
    protected $id;
    protected $name;
    protected $type;
    protected $dateCreated;
    protected $lastUpdated;
    
    protected $data = array();
    
    protected function getRequiredCreateProperties() {
        $properties = array_keys($this->getProperties());
        
        list($id) = array_keys($properties, 'id');
        unset($properties[$id]);
        
        list($applications) = array_keys($properties, 'data');
        unset($properties[$applications]);
        
        return $properties;
    }
    
    protected function getRequiredUpdateProperties() {
        return array_keys($this->getProperties());
    }
        
}