<?php

use Phalcon\Mvc\Router;
use Phalcon\Mvc\Router\Group as RouterGroup;

$router = new Router();

// Remove trailing slashes automatically
$router->removeExtraSlashes(true);

// Create API group
$api = new RouterGroup(['controller' => 'robots', 'action' => 'handle']);

// All the routes start with /api/robots
$api->setPrefix("/api/robots");

// Get all robots
$api->addGet('', ['params' => 'all']);

// Search for a robot
$api->addGet('/search/{name:[A-Za-z0-9]+}', ['params' => 'search']);

// Get one robot by ID
$api->addGet('/{id:[0-9]+}', ['params' => 'get']);

// Create a new robot
$api->addPost('', ['params' => 'create']);

// Update a robot
$api->addPut('', ['params' => 'update']);

// Delete a robot
$api->addDelete('/{id:[0-9]+}', ['params' => 'delete']);

// Add the group to the router
$router->mount($api);

return $router;