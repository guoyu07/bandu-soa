<?php

namespace Parplu\Apps\Services\Handlers;

use Parplu\Handlers\RequestHandler;

class ServiceHandler extends RequestHandler {
    
    protected function loadControllers() {
        return array(
            'USER' => '\Parplu\Controllers\Restful\UserController',
        );
    }
        
}