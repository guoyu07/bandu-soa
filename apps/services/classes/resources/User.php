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
    
    private $required;
    
    protected function init() {
        parent::init();
        $this->internal[] = 'password';
        $this->internal[] = 'required';

        $this->required = array(
            'create' => $this->getRequiredCreateProperties(),
        );
    }
    
    protected function getRequiredCreateProperties() {
        $properties = array_keys($this->getProperties());
        $keys = array_keys($properties, 'id');
        unset($properties[$keys[0]]);
        return $properties;
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