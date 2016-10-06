<?php

namespace Api\Controllers\Endpoints;

class GetController extends \ControllerBase implements EndpointInterface
{
    /**
     * Get one robot by ID
     *
     * @param $params
     *
     * @return \Robots
     * @throws \Exception
     */
    public static function index($params)
    {
        $robot = \Robots::findFirst($params['id']);

        if (!$robot)
            throw new \Exception();

        return $robot;
    }
}

