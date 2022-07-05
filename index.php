<?php

require '.env';

$ch = curl_init();

curl_setopt_array($ch, [

    CURLOPT_URL => "https://api.github.com/gists/6a5ec3f1ef07a7080aa6781dbc9e1111",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT => "Radoncode"

]);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

print_r($data);

/*foreach ($data as $gist) {

    echo $gist["id"], " - ", $gist["description"], "\n";
}*/
