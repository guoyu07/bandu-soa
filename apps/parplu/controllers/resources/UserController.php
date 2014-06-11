<?php

namespace Parplu\Controllers\Resources;

use Parplu\Controllers\RESTful\Controller;

use parplu\resources\User;

use parplu\resources\managers\UsersManager;

use bandu\database\MySQLWrapper;

class UserController extends Controller {

    public function handleGet() {
        $db = new MySQLWrapper(array(
                'server' => 'localhost',
                'user' => 'root',
                'password' => 'p4$$word!',
                'db' => 'parplu'
        ));

        $rm = new UsersManager($db);

        $user = new User(array(
                'emailAddress' => 'su@aboynamedsu.net',
                'password' => md5('p4$$word!'),
        ));

        $rm->retrieve($user);
        
        return $user->render('JSON');
    }

    public function handlePost() {
        return "post";
    }

    public function handlePut() {
        return "put";
    }

    public function handleDelete() {
        return "delete";
    }

}