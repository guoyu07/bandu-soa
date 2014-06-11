<?php

namespace parplu\resources;

use kongossa\objects\Resource;

class Persona extends Resource {
    
    protected $id;
    protected $type;
    protected $creator;
    protected $name;
    protected $url;
    protected $synopsis;
    protected $visibility;
    protected $status;
    protected $dateCreated;
    protected $lastUpdated;
    
    protected $administrators;
    
    protected function getRequiredCreateProperties() {
        $properties = array_keys($this->getProperties());
        unset($properties['id']);
        unset($properties['synopsis']);
        return $properties;
    }
    
    protected function getRequiredUpdateProperties() {
        return array_keys($this->getProperties());
    }
    
}