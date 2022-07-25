<?php

class TaskController 
{   
    private $gateway;

    public function __construct(TaskGateway $gateway)
    {
        $this->gateway = $gateway;
    }
    public function processRequest(string $method, ?string $id): void {

        if ($id === null) {

            if ($method == "GET") {

                echo json_encode($this->gateway->getAll());
                
            } elseif ($method == "POST") {

                echo "create";

            } else {
                $this->respondMethodeNotAllowed("GET, POST");
            }
        } else {

            switch ($method) {

                case "GET":
                    echo "show $id";
                    break;
                
                case "PATCH":
                    echo "update $id";
                    break;

                case "DELETE":
                    echo "delete $id";
                    break;

                default:
                $this->respondMethodeNotAllowed("GET, PATCH, DELETE");
            }
        }
    }

    private function respondMethodeNotAllowed(string $allowed_methods): void
    {
        http_response_code(405);
        header("Allow: $allowed_methods ");
    }
}