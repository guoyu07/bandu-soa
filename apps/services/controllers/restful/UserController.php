<?php

namespace Parplu\Controllers\RESTful;

use parplu\resources\User;

use parplu\resources\managers\UsersManager;

use bandu\database\MySQLWrapper;

class UserController extends Controller {
        
    protected function getResourceManager() {
        $db = new MySQLWrapper(array(
                'server' => 'localhost',
                'user' => 'root',
                'password' => 'p4$$word!',
                'db' => 'parplu'
        ));
        return new UsersManager($db);
    }

    public function handleGet() {
        $user = $this->getResourceFromRequest(new User());
        return $user->render('JSON');
    }

    public function handlePost() {
        $user = new User($this->getRequestData());
        if ($user->isValid('create')) {
            $this->getResourceManager()->create($user);
        }
        return $user->render('JSON');
    }

    public function handlePut() {
        if (!array_key_exists('id', $this->request)) {
            throw new \Exception('Resource not found', 404);
        }
        $user = new User(array('id' => $this->request['id']));
        $rm = $this->getResourceManager();
        $rm->retrieve($user);
        $user->setProperties($this->getRequestData());
        if ($user->isValid('update')) {
            $rm->update($user);
        }
        return $user->render('JSON');
    }

    public function handleDelete() {
        if (!array_key_exists('id', $this->request)) {
            throw new \Exception('Resource not found', 404);
        }
        $user = new User(array('id' => $this->request['id']));
        $rm = $this->getResourceManager();
        $rm->retrieve($user);
        $rm->delete($user);
        return null;
    }
    
}