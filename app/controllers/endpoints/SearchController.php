<?php

namespace Api\Controllers\Endpoints;

class SearchController extends \ControllerBase implements EndpointInterface
{
    /**
     * Search for a robot
     *
     * @param $params
     *
     * @return \Robots[]
     */
    public static function index($params)
    {
        return \Robots::find(["name LIKE '%{$params['name']}%'"]);
    }
}

