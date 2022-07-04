<?php

require '.env';

$ch = curl_init();

$headers = [
    "Authorization: token ".YOUR_ACCESS_KEY
];

curl_setopt_array($ch, [

    CURLOPT_URL => "https://api.github.com/user/starred/Radoncode/API-PHP",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_USERAGENT => "Radoncode",
    CURLOPT_CUSTOMREQUEST => "PUT"

]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo $status_code, "\n";

echo $response, "\n";
