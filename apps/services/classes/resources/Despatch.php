<?php

namespace parplu\resources;

use kongossa\objects\Resource;

class Despatch extends Resource {
    
    protected $id;
    protected $recipientId;
    protected $type;
    protected $medium;
    protected $dateCreated;
    protected $dateDue;
    protected $status;
    
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