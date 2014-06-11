<?php

namespace parplu\resources\managers\remote;

use bandu\resources\managers\RemoteResourceManager;

class UsersManager extends RemoteResourceManager {

    protected function getBaseDomain() {
        return "http://services.parplu.com";
    }
    
    protected function getResource() {
        return "user";
    }
                
}