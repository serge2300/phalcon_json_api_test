<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    /**
     * @var array Data from the request
     */
    protected $requestData = [];

    public function initialize()
    {
        $this->requestData = (array) $this->request->getJsonRawBody();
    }
}
