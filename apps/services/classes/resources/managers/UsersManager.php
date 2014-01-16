<?php

namespace parplu\resources\managers;

use bandu\orm\LocalResourceManager;

class UsersManager extends LocalResourceManager {

    protected function getDefaults() {
        return array(
                'table' => 'Users',
                'filter' => array(
                        'id' => 'id',
                ),
        );
    }

    protected function getProperties() {
        return array(
                'id' => array(
                        'field' => 'id',
                        'rules' => array(
                                'READ_ONLY',
                        ),
                        'callback' => array(),
                ),
                'firstName' => array(
                        'field' => 'firstName',
                        'rules' => array(),
                        'callback' => array(),
                ),
                'lastName' => array(
                        'field' => 'lastName',
                        'rules' => array(),
                        'callback' => array(),
                ),
                'dateOfBirth' => array(
                        'field' => 'dateOfBirth',
                        'rules' => array(),
                        'callback' => array(),
                ),
                'emailAddress' => array(
                        'field' => 'emailAddress',
                        'rules' => array(),
                        'callback' => array(),
                ),
                'password' => array(
                        'field' => 'password',
                        'rules' => array(),
                        'callback' => array(),
                ),
                'dateCreated' => array(
                        'field' => 'dateCreated',
                        'rules' => array(
                                'CREATE_ONLY',
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
            'applications' => array(
                'table' => 'Applications__Users',
                'filter' => array(
                    'id' => 'userId',
                ),
                'fields' => array(
                    'appId',
                ),
                'callback' => array(),
            ),
        );
    }
    
    protected function getCollections() {
        return array();
    }

}