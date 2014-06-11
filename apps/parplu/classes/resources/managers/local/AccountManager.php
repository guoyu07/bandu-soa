<?php

namespace parplu\resources\manager\local;

use bandu\orm\LocalResourceManager;

class AccountManager extends LocalResourceManager {
    
    protected function getDefaults() {
        return array(
            'table' => 'Accounts',
            'filter' => array(
                'id'
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
            'emailAddress' => array(
                'field' => 'emailAddress',
                'rules' => array(),
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
            'gender' => array(
                'field' => 'gender',
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
            'personas' => array(
                'table' => 'Accounts__Personas',
                'fields' => array(
                    'personaId',
                ),
                'filter' => array(
                    'id' => 'accountId',
                ),
                'callback' => array(),
            ),
        );
    }
    
    protected function getCollections() {
        return array();
    }
    
}