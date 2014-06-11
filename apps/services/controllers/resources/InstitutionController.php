<?php

namespace Parplu\Controllers\RESTful;

use bandu\orm\LocalResourceManager;

use Parplu\Controllers\RESTful\Controller;

class InstitutionController extends Controller {
    
    public function getResourceManager() {
        $db = new MySQLWrapper(array(
                'server' => 'localhost',
                'user' => 'root',
                'password' => 'p4$$word!',
                'db' => 'parplu'
        ));
        return new InstitutionsManager($db);
    }
    
    public function handleGet() {
        
    }
    
    public function handlePost() {
        
    }
    
    public function handlePut() {
        
    }
    
    public function handleDelete() {
        
    }
    
}