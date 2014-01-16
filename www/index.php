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
require_once '../controllers/restful/Controller.php';

$request = new RESTfulRequest();

$user1 = json_encode(array(
        'firstName' => 'Suhmayah',
        'lastName' => 'Banda',
        'dateOfBirth' => mktime(12, 0, 0, 9, 11, 1985),
        'emailAddress' => 'su@aboynamedsu.net',
        'password' => md5('p4$$word!'),
        'dateCreated' => time(),
        'lastUpdated' => time(),
), true);

$user2 = json_encode(array(
        'firstName' => 'Albert',
        'lastName' => 'Banda',
        'dateOfBirth' => mktime(12, 0, 0, 6, 24, 1984),
        'emailAddress' => 'al.banda624@gmail.com',
        'password' => md5('p4$$word!'),
        'dateCreated' => time(),
        'lastUpdated' => time(),
), true);

$user3 = json_encode(array(
        'firstName' => 'Faux',
        'lastName' => 'Banda',
        'dateOfBirth' => mktime(12, 0, 0, 6, 9, 1987),
        'dateCreated' => time(),
        'lastUpdated' => time(),
), true);

$user3 = $user1;

echo $request->setRequestURL("http://services.parplu.com?resource=user")->setRequestMethod(RESTfulRequest::POST)->setPayload($user1)->send()->getResponse();
echo $request->setRequestURL("http://services.parplu.com?resource=user")->setRequestMethod(RESTfulRequest::POST)->setPayload($user2)->send()->getResponse();
echo $request->setRequestURL("http://services.parplu.com?resource=user")->setRequestMethod(RESTfulRequest::POST)->setPayload($user3)->send()->getResponse();
