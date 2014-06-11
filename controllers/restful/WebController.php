<?php

namespace Parplu\Controllers\RESTful;

use Parplu\Controllers\RESTful\Controller;

abstract class WebController extends Controller {
    
    public function handlePut() {
        throw new \Exception('Method Not Supported');
    }
    
    public function handleDelete() {
        throw new \Exception('Method Not Supported');
    }
    
}