<?php

require '.env';

$ch = curl_init();

$headers = [
    "Authorization: token ".YOUR_ACCESS_KEY,
    //"User-Agent: Radoncode"
];

curl_setopt_array($ch, [

    CURLOPT_URL => "https://api.github.com/user/starred/Radoncode/API-PHP",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers

]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo $status_code, "\n";

echo $response, "\n";
