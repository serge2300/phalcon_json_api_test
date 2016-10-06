<?php

namespace Api\Controllers\Endpoints;

class CreateController extends \ControllerBase implements EndpointInterface
{
    /**
     * Create a new robot
     *
     * @param $params
     *
     * @return bool
     */
    public static function index($params)
    {
        $robot = new \Robots();

        return $robot->save(self::$requestData);
    }
}

