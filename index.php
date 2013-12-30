<?php

namespace Parplu;

use Parplu\Classes\Requests\RESTfulRequest;

require_once 'handlers/RequestHandler.php';
require_once 'classes/requests/RESTfulRequest.php';
require_once 'controllers/restful/Controller.php';
require_once 'controllers/restful/UserController.php';

// $_SERVER['REQUEST_METHOD'] = 'delete';

// $requestHandler = new Handlers\RequestHandler(array('handler' => "User"));
// echo $requestHandler->handleRequest();

$request = new RESTfulRequest();
$request->setRequestURL("http://www.aboynamedsu.co.uk/")->setRequestMethod(RESTfulRequest::GET)->send();