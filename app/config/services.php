<?php

use Phalcon\Mvc\View;
use Phalcon\Mvc\Dispatcher;

/**
 * Shared configuration service
 */
$di->setShared('config', function () {
    return include APP_PATH . "/config/config.php";
});

/**
 * Register a dispatcher
 */
$di->set('dispatcher', function () {
    $dispatcher = new Dispatcher();

    $dispatcher->setDefaultNamespace("Api\\Controllers");

    return $dispatcher;
});

/**
 * Setting up the view component
 */
$di->setShared('view', function () {
    $view = new View();
    $view->disable();

    return $view;
});

/**
 * Database connection is created based in the parameters defined in the configuration file
 */
$di->setShared('db', function () {
    $config = $this->getConfig();

    $class = 'Phalcon\Db\Adapter\Pdo\\' . $config->database->adapter;
    $connection = new $class([
        'host'     => $config->database->host,
        'username' => $config->database->username,
        'password' => $config->database->password,
        'dbname'   => $config->database->dbname,
        'charset'  => $config->database->charset
    ]);

    return $connection;
});

/**
 * Routing
 */
$di->set(
    'router',
    function () {
        return include APP_PATH . "/config/routes.php";
    }
);