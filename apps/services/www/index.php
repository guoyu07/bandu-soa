<?php

namespace Parplu;

use Parplu\Apps\Services\Handlers\ServiceHandler;

use parplu\resources\User;

use parplu\resources\managers\local\UsersManager;

use parplu\resources\Banner;

use parplu\resources;

use parplu\resources\managers;

use bandu\database;

use bandu\requests\RESTfulRequest;

/**
 * System Files
 */
require_once '/home/sbanda/workspace/Parplu-Server/lib/bandu/database/MySQLWrapper.php';
require_once '/home/sbanda/workspace/Parplu-Server/lib/bandu/objects/Struct.php';
require_once '/home/sbanda/workspace/Parplu-Server/lib/bandu/objects/Resource.php';
require_once '/home/sbanda/workspace/Parplu-Server/lib/bandu/orm/ORMComponent.php';
require_once '/home/sbanda/workspace/Parplu-Server/lib/bandu/orm/Property.php';
require_once '/home/sbanda/workspace/Parplu-Server/lib/bandu/orm/Association.php';
require_once '/home/sbanda/workspace/Parplu-Server/lib/bandu/orm/Collection.php';
require_once '/home/sbanda/workspace/Parplu-Server/lib/bandu/orm/LocalResourceManager.php';
require_once '/home/sbanda/workspace/Parplu-Server/lib/bandu/requests/RESTfulRequest.php';
require_once '/home/sbanda/workspace/Parplu-Server/lib/bandu/resources/managers/RemoteResourceManager.php';

require_once '/home/sbanda/workspace/Parplu-Server/handlers/RequestHandler.php';

require_once '/home/sbanda/workspace/Parplu-Server/apps/services/handlers/ServiceHandler.php';

require_once '/home/sbanda/workspace/Parplu-Server/apps/services/classes/resources/managers/local/UsersManager.php';
require_once '/home/sbanda/workspace/Parplu-Server/apps/services/classes/resources/managers/local/ApplicationsManager.php';
require_once '/home/sbanda/workspace/Parplu-Server/apps/parplu/classes/resources/managers/remote/UsersManager.php';
require_once '/home/sbanda/workspace/Parplu-Server/apps/services/classes/resources/User.php';
require_once '/home/sbanda/workspace/Parplu-Server/apps/services/classes/resources/Application.php';
require_once '/home/sbanda/workspace/Parplu-Server/controllers/restful/Controller.php';
require_once '/home/sbanda/workspace/Parplu-Server/apps/services/controllers/resources/UserController.php';
require_once '/home/sbanda/workspace/Parplu-Server/apps/services/classes/resources/Despatch.php';
require_once '/home/sbanda/workspace/Parplu-Server/apps/services/controllers/resources/DespatchController.php';

$requestHandler = new ServiceHandler($_GET);
header('Content-Type: text/json');
echo $requestHandler->handleRequest();
