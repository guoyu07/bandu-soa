<?php

namespace Parplu;

require_once 'handlers/RequestHandler.php';
require_once 'controllers/restful/Controller.php';
require_once 'controllers/restful/UserController.php';

$_SERVER['REQUEST_METHOD'] = 'delete';

$requestHandler = new Handlers\RequestHandler(array('handler' => "User"));
echo $requestHandler->handleRequest();