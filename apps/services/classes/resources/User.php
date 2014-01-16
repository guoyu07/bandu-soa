<?php

namespace parplu\resources;

use kongossa\objects\Struct;

class User extends Struct {

    protected $id;
    protected $firstName;
    protected $lastName;
    protected $dateOfBirth;
    protected $emailAddress;
    protected $password;
    protected $dateCreated;
    protected $lastUpdated;
    
    protected $applications;
    
    private $required;
    
    protected function init() {
        parent::init();
        $this->internal[] = 'password';
        $this->internal[] = 'required';

        $this->required = array(
            'create' => $this->getRequiredCreateProperties(),
            'update' => $this->getRequiredUpdateProperties(),
        );
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
    
    public function isValid($method) {
        foreach ($this->required[$method] as $property) {
            $getter = 'get'.ucfirst($property);
            if (is_null($this->$getter())) {
                throw new \Exception("Missing Required Argument: $property");
            }
        }
        return true;
    }

}