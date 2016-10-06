<?php

namespace Api\Controllers\Endpoints;

class UpdateController extends \ControllerBase implements EndpointInterface
{
    /**
     * Update a robot
     *
     * @param $params
     *
     * @return bool
     * @throws \Exception
     */
    public static function index($params)
    {
        $robot = \Robots::findFirst(self::$requestData['id']);

        if (!$robot)
            throw new \Exception();

        return $robot->update(self::$requestData);
    }
}

