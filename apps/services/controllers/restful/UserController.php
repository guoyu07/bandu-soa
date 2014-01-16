<?php

namespace Parplu\Controllers\RESTful;

use parplu\resources\User;

use parplu\resources\managers\UsersManager;

use bandu\database\MySQLWrapper;

class UserController extends Controller {
    
    protected $userManager;
    
    public function __construct($request) {
        parent::__construct($request);
        $this->init();
    }
    
    protected function init() {
        $db = new MySQLWrapper(array(
                'server' => 'localhost',
                'user' => 'root',
                'password' => 'p4$$word!',
                'db' => 'parplu'
        ));
        $this->userManager = new UsersManager($db);
    }

    public function handleGet() {
        $user = $this->getUserFromRequest();
        return $user->render('JSON');
    }

    public function handlePost() {
        $user = new User($this->getRequestData());
        if ($user->isValid('create')) {
            $this->userManager->create($user);
        }
        return $user->render('JSON');
    }

    public function handlePut() {
        if (!array_key_exists('id', $this->request)) {
            throw new \Exception('Resource not found', 404);
        }
        $user = new User(array('id' => $this->request['id']));
        $this->userManager->retrieve($user);
        $user->setProperties($this->getRequestData());
        if ($user->isValid('update')) {
            $this->userManager->update($user);
        }
        return $user->render('JSON');
    }

    public function handleDelete() {
        if (!array_key_exists('id', $this->request)) {
            throw new \Exception('Resource not found', 404);
        }
        $user = new User(array('id' => $this->request['id']));
        $this->userManager->retrieve($user);
        $this->userManager->delete($user);
        return null;
    }
    
    protected function getUserFromRequest() {
        $user = new User();
        $properties = array();
        foreach (array_keys($user->getProperties()) as $property) {
            if (array_key_exists($property, $this->request)) {
                $properties[$property] = $this->request[$property];
            }
        }
        $user->setProperties($properties);
        $this->userManager->retrieve($user);
        return $user;
    }

}