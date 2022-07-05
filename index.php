<?php

require '.env';

require __DIR__."/vendor/autoload.php";

$client = new \GuzzleHttp\Client();

$response = $client->request('GET', 'https://api.github.com/user/repos', [
    "headers" => [
        "Authorization" => "token ".YOUR_ACCESS_KEY,
        "User-Agent" => "Radoncode"
    ]
]);

echo $response->getStatusCode(), "\n";

echo $response->getHeader("content-type")[0], "\n";

echo substr($response->getBody(), 0, 200), "...\n";


