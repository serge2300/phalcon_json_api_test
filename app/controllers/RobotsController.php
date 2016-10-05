<?php

namespace Api\Controllers;

use Robots;

class RobotsController extends \ControllerBase
{
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
        $data = (array) $this->request->getJsonRawBody();

        $robot = new Robots();
        $robot->save($data);
    }

    public function updateAction()
    {
        $data = (array) $this->request->getJsonRawBody();

        $robot = Robots::findFirst($data['id']);
        $robot->save($data);
    }

    public function deleteAction($id)
    {
        $robot = Robots::findFirst($id);
        $robot->delete();
    }
}

