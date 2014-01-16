<?php

namespace Parplu;

use Parplu\Apps\Services\Handlers\ServiceHandler;

use parplu\resources\User;

use parplu\resources\managers\UsersManager;

use parplu\resources\Banner;

use parplu\resources;

use parplu\resources\managers;

use bandu\database;

use bandu\requests\RESTfulRequest;

require_once '/home/sbanda/workspace/Parplu-Server/lib/bandu/database/MySQLWrapper.php';
require_once '/home/sbanda/workspace/Parplu-Server/lib/bandu/objects/Struct.php';
require_once '/home/sbanda/workspace/Parplu-Server/lib/bandu/orm/ORMComponent.php';
require_once '/home/sbanda/workspace/Parplu-Server/lib/bandu/orm/Property.php';
require_once '/home/sbanda/workspace/Parplu-Server/lib/bandu/orm/Association.php';
require_once '/home/sbanda/workspace/Parplu-Server/lib/bandu/orm/Collection.php';
require_once '/home/sbanda/workspace/Parplu-Server/lib/bandu/orm/LocalResourceManager.php';
require_once '/home/sbanda/workspace/Parplu-Server/lib/bandu/requests/RESTfulRequest.php';
require_once '/home/sbanda/workspace/Parplu-Server/handlers/RequestHandler.php';
require_once '/home/sbanda/workspace/Parplu-Server/apps/services/handlers/ServiceHandler.php';
require_once '/home/sbanda/workspace/Parplu-Server/apps/services/classes/resources/managers/UsersManager.php';
require_once '/home/sbanda/workspace/Parplu-Server/apps/services/classes/resources/managers/ApplicationsManager.php';
require_once '/home/sbanda/workspace/Parplu-Server/apps/services/classes/resources/User.php';
require_once '/home/sbanda/workspace/Parplu-Server/apps/services/classes/resources/Application.php';
require_once '/home/sbanda/workspace/Parplu-Server/apps/services/controllers/restful/Controller.php';
require_once '/home/sbanda/workspace/Parplu-Server/apps/services/controllers/restful/UserController.php';

$_SERVER['REQUEST_METHOD'] = 'get';

$requestHandler = new ServiceHandler(array('resource' => 'user'));
echo $requestHandler->handleRequest();
