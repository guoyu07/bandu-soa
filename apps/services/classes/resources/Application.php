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
}