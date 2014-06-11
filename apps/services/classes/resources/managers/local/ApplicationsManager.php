<?php

namespace parplu\resources\managers\local;

use bandu\orm;

class ApplicationsManager extends orm\LocalResourceManager {
    
    protected function getDefaults() {
        return array(
            'table' => 'Applications',
            'filter' => array(
                'id',
            ),
        );
    }

    protected function getProperties() {
        return array(
            'id' => array(
                'field' => 'id',
                'rules' => array(
                	'READ_ONLY'
                ),
                'callback' => array(),
            ),
            'name' => array(
                'field' => 'name',
                'rules' => array(),
                'callback' => array(),
            ),
            'reference' => array(
                'field' => 'reference',
                'rules' => array(),
                'callback' => array(),
            ),
            'dateCreated' => array(
                'field' => 'dateCreated',
                'rules' => array(
                    'CREATE_ONLY'
                ),
                'callback' => array(),
            ),
            'lastUpdated' => array(
                'field' => 'lastUpdated',
                'rules' => array(),
                'callback' => array(),
            ),
        );
    }
    
    protected function getAssociations() {
        return array(
            'users' => array(
                'table' => 'Applications__Users',
                'filter' => array(
                    'id' => 'appId',
                ),
                'fields' => array(
                    'userId',
                ),
                'callback' => array(),
            )
        );
    }
    
    protected function getCollections() {
        return array();
    }

}