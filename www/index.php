<?php

namespace Parplu;

use parplu\resources\User;

use parplu\resources\managers\UsersManager;

use parplu\resources\Banner;

use parplu\resources;

use parplu\resources\managers;

use bandu\database;

use bandu\requests\RESTfulRequest;

require_once '../lib/bandu/database/MySQLWrapper.php';
require_once '../lib/bandu/objects/Struct.php';
require_once '../lib/bandu/orm/ORMComponent.php';
require_once '../lib/bandu/orm/Property.php';
require_once '../lib/bandu/orm/Association.php';
require_once '../lib/bandu/orm/Collection.php';
require_once '../lib/bandu/orm/LocalResourceManager.php';
require_once '../lib/bandu/requests/RESTfulRequest.php';
require_once '../handlers/RequestHandler.php';
require_once '../classes/resources/managers/UsersManager.php';
require_once '../classes/resources/User.php';
require_once '../controllers/restful/Controller.php';
require_once '../controllers/restful/UserController.php';

$_SERVER['REQUEST_METHOD'] = 'get';

$requestHandler = new Handlers\RequestHandler(array('handler' => "User"));
echo $requestHandler->handleRequest();

// $request = new RESTfulRequest();
// echo $request->setRequestURL("https://github.com")->setRequestMethod(RESTfulRequest::GET)->send()->getResponse();

// $db = new database\MySQLWrapper(array(
//         'server' => 'localhost',
//         'user' => 'root',
//         'password' => 'p4$$word!',
//         'db' => 'parplu'
// ));

// $rm = new managers\UsersManager($db);

// $user = new User(array(
//         'firstName' => 'Suhmayah',
//         'lastName' => 'Banda',
//         'dateOfBirth' => mktime(12, 0, 0, 9, 11, 1985),
//         'emailAddress' => 'su@aboynamedsu.net',
//         'password' => md5('p4$$word!'),
//         'dateCreated' => time(),
//         'lastUpdated' => time(),
// ));

// $rm->create($user);

// print_r($user);