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

// $despatch = json_decode('{"recipientId":1,"type":"CONFIRMATION","medium":"EMAIL","dateCreated":"1389984957","dateDue":1389988557,"status":"PENDING"}');
// $despatch->data = array(
//     array('dataKey' => 'something', 'dataValue' => 'other'),
// );
// $despatch = json_encode($despatch, true);
//echo $request->setRequestURL("http://services.parplu.com?resource=despatch")->setRequestMethod(RESTfulRequest::POST)->setPayload($despatch)->send()->getResponse();
echo $request->setRequestURL("http://services.parplu.com?resource=despatch&id=5")->setRequestMethod(RESTfulRequest::GET)->send()->getResponse();

//echo $request->setRequestURL("http://services.parplu.com?resource=user&id=2")->setRequestMethod(RESTfulRequest::DELETE)->send()->getResponse();
//echo $request->setRequestURL("http://services.parplu.com?resource=user")->setRequestMethod(RESTfulRequest::POST)->setPayload($user2)->send()->getResponse();
//echo $request->setRequestURL("http://services.parplu.com?resource=user")->setRequestMethod(RESTfulRequest::POST)->setPayload($user3)->send()->getResponse();
