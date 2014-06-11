<?php

use parplu\resources\managers\remote\UsersManager;
use parplu\resources\User;

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

$resourceManager = new UsersManager();
// $user = new User(array(
//             'firstName' => 'Suhmayah',
//             'lastName' => 'Banda',
//             'dateOfBirth' => mktime(9,0,0,9,11,1985),
//             'emailAddress' => 's.banda911@googlemail.com',
//             'password' => 'password',
//             'dateCreated' => time(),
//             'lastUpdated' => time(),
//         ));

$user = new User(array('id' => 1));

$resourceManager->retrieve($user);

echo $user->render('JSON');