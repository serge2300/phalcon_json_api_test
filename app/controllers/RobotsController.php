<?php

namespace Api\Controllers;

use Robots;

class RobotsController extends \ControllerBase
{
    public function initialize()
    {
        parent::initialize();
    }

    public function allAction()
    {
        $robots = Robots::find()->toArray();

        return $this->response->setJsonContent($robots);
    }

    public function searchAction($name)
    {
        $robots = Robots::find(["name LIKE '%$name%'"]);

        return $this->response->setJsonContent($robots);
    }

    public function getAction($id)
    {
        $robot = Robots::findFirst($id);

        return $this->response->setJsonContent($robot);
    }

    public function createAction()
    {
        $robot = new Robots();
        $robot->save($this->requestData);
    }

    public function updateAction()
    {
        $robot = Robots::findFirst($this->requestData['id']);
        $robot->save($this->requestData);
    }

    public function deleteAction($id)
    {
        $robot = Robots::findFirst($id);
        $robot->delete();
    }
}

