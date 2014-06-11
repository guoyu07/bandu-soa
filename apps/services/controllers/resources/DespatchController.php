<?php

namespace Parplu\Controllers\RESTful;

use bandu\database\MySQLWrapper;

use parplu\resources\Despatch;

use kongossa\objects\Struct;

use parplu\resources\DespatchesManager;

class DespatchController extends Controller {

    protected function getResourceManager() {
        $db = new MySQLWrapper(array(
                'server' => 'localhost',
                'user' => 'root',
                'password' => 'p4$$word!',
                'db' => 'parplu'
        ));
        return new DespatchesManager($db);
    }

    public function handleGet() {
        $despatch = $this->getResourceFromRequest(new Despatch());
        return $despatch->render('JSON');
    }

    public function handlePost() {
        $despatch = new Despatch($this->getRequestData());
        if ($despatch->isValid('create')) {
            $this->getResourceManager()->create($despatch);
        }
        return $despatch->render('JSON');
    }

    public function handlePut() {
        if (!array_key_exists('id', $this->request)) {
            throw new \Exception('Resource not found', 404);
        }
        $despatch = new Despatch(array('id' => $this->request['id']));
        $rm = $this->getResourceManager();
        $rm->retrieve($despatch);
        $despatch->setProperties($this->getRequestData());
        $rm->update($despatch);
        return $despatch->render('JSON');
    }

    public function handleDelete() {
        if (!array_key_exists('id', $this->request)) {
            throw new \Exception('Resource not found', 404);
        }
        $despatch = new Despatch(array('id' => $this->request['id']));
        $rm = $this->getResourceManager();
        $rm->retrieve($despatch);
        $rm->delete($despatch);
        return null;
    }

}