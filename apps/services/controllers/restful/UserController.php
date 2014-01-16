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
        $user = new User();
        $properties = array();
        foreach (array_keys($user->getProperties()) as $property) {
            if (array_key_exists($property, $this->request)) {
                $properties[$property] = $this->request[$property];
            }
        }
        $user->setProperties($properties);
        $this->userManager->retrieve($user);
        return $user->render('JSON');
    }

    public function handlePost() {
        $payload = file_get_contents('php://input');
        if (!strlen($payload)) {
            throw new \Exception('No Request Data');
        }
        if (!($properties = json_decode($payload, true))) {
            throw new \Exception('Invalid Request Data');
        }
        $user = new User($properties);
        if ($user->isValid('create')) {
            $this->userManager->create($user);
        }
        return $user->render('JSON');
    }

    public function handlePut() {
        return "put";
    }

    public function handleDelete() {
        return "delete";
    }

}