<?php

namespace Parplu\Classes\Requests;

class RESTfulRequest{

    const GET = 'GET';
    const POST = 'POST';
    const PUT = 'PUT';
    const DELETE = 'DELETE';

    /**
     *
     * @var array
     */
    protected $headers = array();

    /**
     *
     * @var string
     */
    protected $requestMethod;

    /**
     * The destination of the request
     *
     * @var array
     */
    protected $requestUrl;

    /**
     *
     * @var string
     */
    protected $payload;

    /**
     * The cURL handler user to send the request
     *
     * @var resource
     */
    protected $ch;

    public function setRequestMethod($method) {
        switch (strtoupper($method)) {
            case self::GET:
            case self::POST:
            case self::PUT:
            case self::DELETE:
                $this->requestMethod = strtoupper($method);
                break;
            default:
                throw new Exception("Request Method Not Supported", 301);
                break;
        }
        return $this;
    }

    public function setRequestURL($url) {
        $components = parse_url($url);
        $this->urlSchemeIsValid($components['scheme'])
        ->hostIsValidDomainOrIPAddress($components['host']);
        $this->requestUrl = $components;
        return $this;
    }

    public function setBaseDomain($domain) {
        $components = parse_url($domain);
        $this->urlSchemeIsValid($components['scheme'])
        ->hostIsValidDomainOrIPAddress($components['host']);
        $this->requestUrl = $components;
        return $this;
    }

    public function setRequestURI($uri) {
        $this->requestUrl['path'] = uri;
        return $this;
    }

    public function setRequestQuery($query) {
        $this->requestUrl['query'] = $query;
        return $this;
    }

    public function setPayload($payload) {
        $this->payload = $payload;
        return $this;
    }

    public function setRequestHeader($key, $value) {
        $this->headers[$key] = $value;
        return $this;
    }

    public function send() {
        $this->ch = curl_init($this->buildUrl($this->requestUrl));
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, $this->requestMethod);
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $this->payload);
        curl_setopt($this->ch, CURLOPT_HTTPHEADER, $this->getRequestHeaders());
        $response = curl_exec($this->ch);
    }

    protected function urlSchemeIsValid($scheme) {
        if (!in_array($scheme, array('http', 'https'))) {
            throw new Exception('No Scheme Provided');
        }
        return $this;
    }

    protected function hostIsValidDomainOrIPAddress($host) {
        $validDomain = filter_var($host, FILTER_VALIDATE_URL);
        $validIPAddr = filter_var($host, FILTER_VALIDATE_IP);
        if ($validDomain || $validIPAddr) {
            throw new \Exception('Invalid Domain or IP Address');
        }
        return $this;
    }
    
    protected function getRequestHeaders() {
        $requestHeaders = array();
        foreach ($this->headers as $key => $value) {
            $requestHeaders[] = sprintf("%s: %s", $key, $value);
        }
        return $requestHeaders;
    }
    
    protected function buildUrl() {
        extract($this->requestUrl);
        $url = sprintf("%s://%s", $scheme, $host);        
        $url.= (isset($path))? $path : "/";
        $url.= (isset($query))? "?".$query : "";
        return $url;
    }

}