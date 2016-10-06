<?php

namespace Api\Controllers\Endpoints;

class DeleteController extends \ControllerBase implements EndpointInterface
{
    /**
     * Delete a robot
     *
     * @param $params
     *
     * @return bool
     * @throws \Exception
     */
    public static function index($params)
    {
        $robot = \Robots::findFirst($params['id']);

        if (!$robot)
            throw new \Exception();

        return $robot->delete();
    }
}

