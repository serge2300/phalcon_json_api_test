<?php

namespace Api\Controllers\Endpoints;

class AllController extends \ControllerBase implements EndpointInterface
{
    /**
     * Get all robots
     *
     * @return \Robots[]
     */
    public static function index($params)
    {
        return \Robots::find();
    }
}

