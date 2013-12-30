<?php

namespace Parplu\Handlers;

class RequestHandler {
    
    const RESOURCE = "RESOURCE";
    const SERVICE = "SERVICE";
    
    protected $handlers = array(
        'USER' => '\Parplu\Controllers\Restful\UserController',
    );
    
    /**
     * 
     * @var array
     */
    protected $request;
                
    /**
     * 
     * @var Parplu\RequestHandler
     */
    protected $handler;
    
    public function __construct(array $request) {
        $this->request = $request;
        $this->init();
    }
    
    protected function init() {
        $this->loadHandler();
    }
    
    /**
     * 
     * @throws Exception
     * @return \Parplu\Controllers\RESTful\Controller
     */
    public function getHandler() {
        switch($this->handler) {
            case array_key_exists($this->handler, $this->handlers):
                $controller = $this->handlers[$this->handler];
                return new $controller($this->request);
                break;
            default:
                throw new \Exception("Invalid Request: Unknown Resource", 404);
                break;
        }
    }
    
    public function handleRequest() {
        return $this->getHandler()->handleRequest();
    }
    
    public function getResponse() {
        return "Request Successful: ".$this->handler;
    }
    
    protected function loadHandler() {
        if (array_key_exists('handler', $this->request)) {
            $this->handler = trim(strtoupper($this->request['handler']));
        } else {
            throw new \Exception("Bad Request: No Handler Requested", 401);
        }
        return $this;
    }
    
}