<?php

declare(strict_types=1);

//ini_set("display_errors", "On");

require '../.env';

require dirname(__DIR__) . "/vendor/autoload.php";

set_exception_handler("ErrorHandler::handleException");


$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

$parts = explode("/", $path);

$resource = $parts[2];

$id = $parts[3] ?? null;

if ($resource != "tasks") {

    //header("{$_SERVER['SERVER_PROTOCOL']} 404 Not Found");
    http_response_code(404);
    exit;
}

header("Content-type: application/json; charset=UTF-8");

$controller = new TaskController();

$controller->processRequest($_SERVER['REQUEST_METHOD'], $id);







