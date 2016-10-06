<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    /**
     * @var array Data from the request
     */
    protected static $requestData = [];

    public function initialize()
    {
        self::$requestData = (array) $this->request->getJsonRawBody();
    }
}
