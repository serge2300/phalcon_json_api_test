<?php

namespace Api\Controllers;

class RobotsController extends \ControllerBase
{
    /**
     * Success message
     */
    const SUCCESS = 'Success';

    /**
     * Error message
     */
    const ERROR = 'Error! Check your data';

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
                $responseContent = self::SUCCESS;
            } else {
                // Show data
                $responseContent = $response;
            }
        } catch (\Exception $e) {
            $responseContent = self::ERROR;
        }

        return $this->response->setJsonContent($responseContent);
    }
}

