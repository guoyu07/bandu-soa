<?php

namespace parplu\resources\managers\local;

use bandu\orm\LocalResourceManager;

class InstitutionsManager extends LocalResourceManager {
    
    protected function getDefaults() {
        return array(
            'table' => 'Institutions',
            'filter' => array(
                'id' => 'id'
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
            'type' => array(
                'field' => 'type',
                'rules' => array(),
                'callback' => array(),
            ),
            'dateCreated' => array(
                'field' => 'dateCreated',
                'rules' => array(),
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
            'data' => array(
                'table' => 'Institutions__Data',
                'filter' => array(
                    'id' => 'institutionId',
                ),
                'fields' => array(
                    'dataKey',
                    'dataValue',
                ),
                'callback' => array(),
            ),
        );
    }
    
    protected function getCollections() {
        return array();
    }
    
}