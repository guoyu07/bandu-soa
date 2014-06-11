<?php

namespace parplu\resources\manager\local;

use bandu\orm\LocalResourceManager;

class DespatchesManager extends LocalResourceManager {
    
    protected function getDefaults() {
        return array(
            'table' => 'Despatches',
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
            'recipientId' => array(
                'field' => 'recipientId',
                'rules' => array(),
                'callback' => array(),
            ),
            'type' => array(
                'field' => 'type',
                'rules' => array(),
                'callback' => array(),
            ),
            'medium' => array(
                'field' => 'medium',
                'rules' => array(),
                'callback' => array(),
            ),
            'dateCreated' => array(
                'field' => 'dateCreated',
                'rules' => array(),
                'callback' => array(),
            ),
            'dateDue' => array(
                'field' => 'dateDue',
                'rules' => array(),
                'callback' => array(),
            ),
            'status' => array(
                'field' => 'status',
                'rules' => array(),
                'callback' => array(),
            ),
        );
    }
    
    protected function getAssociations() {
        return array(
            'data' => array(
                'table' => 'Despatches__Data',
                'fields' => array(
                    'dataKey',
                    'dataValue',
                ),
                'filter' => array(
                    'id' => 'despatchId',
                ),
                'callback' => array(),
            ),
        );
    }
    
    protected function getCollections() {
        return array();
    }
    
}