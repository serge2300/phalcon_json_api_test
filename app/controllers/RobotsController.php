<?php

namespace Api\Controllers;

class RobotsController extends \ControllerBase
{
    /**
     * @var string Success message
     */
    protected $success = 'Success';

    /**
     * @var string Error message
     */
    protected $error = 'Error! Check your data';

    /**
     * Handle a request
     *
     * @return \Phalcon\Http\Response|\Phalcon\Http\ResponseInterface
     */
    public function handleAction()
    {
        try {
            // Get all parameters
            $params = $this->router->getParams();
            // Get the endpoint parameter
            $endpoint = ucfirst($params[0]);
            unset($params[0]);

            // Call an endpoint
            $response = call_user_func_array(['Api\\Controllers\\Endpoints\\' . $endpoint . 'Controller', 'index'], [$params]);

            if ($response === true) {
                // Show success message
                $responseContent = $this->success;
            } else {
                // Show data
                $responseContent = $response;
            }
        } catch (\Exception $e) {
            $responseContent = $this->error;
        }

        return $this->response->setJsonContent($responseContent);
    }
}

