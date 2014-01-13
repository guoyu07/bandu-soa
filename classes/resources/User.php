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
    
    protected function init() {
        parent::init();
        $this->internal[] = 'password';
    }

}