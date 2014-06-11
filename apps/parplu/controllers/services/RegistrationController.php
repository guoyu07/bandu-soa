<?php

namespace Parplu\Controllers\Services;

use parplu\resources\managers\remote\UsersManager;

use parplu\resources\managers\remote\UserManager;

use parplu\resources\DespatchesManager;

use parplu\resources\Despatch;

use parplu\resources\User;

use Parplu\Controllers\RESTful\WebController;

class RegistrationController extends WebController {
    
    public function handleGet() {
    }
    
    public function handlePost() {
        switch ($_POST['submit']) {
            case 'registration_details':
                $this->registerNewUser($_POST);
                break;
            default:
                throw new Exception('Bad Request');
                break;
        }
    }
    
    public function registerNewUser($data) {
        $user = new User();
        $properties = array();
        foreach (array_keys($user->getProperties()) as $input) {
            if (array_key_exists($input, $data)) {
                $properties[$input] = $data[$input];
            }
        }
        $usersManager = new UsersManager();
        try {
            $usersManager->create($user);
        } catch (\Exception $e) {
            
        }
    }
    
    protected function createNewUser($user) {
        $userManager->create($user);
        $despatch = new Despatch();
        $despatchManager = new DespatchesManager($db);
        $despatchManager->create($despatch);
    }
    
}