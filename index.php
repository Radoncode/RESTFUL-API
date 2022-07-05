<?php

require '.env';

$data = [
    "name" => "Code",
    "email" => "code@example.com"
];

require __DIR__."/vendor/autoload.php";

$stripe = new \Stripe\StripeClient(YOUR_API_KEY);

$customer = $stripe->customers->create($data);

echo $customer;

/*$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => 'https://api.stripe.com/v1/customers',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERPWD => YOUR_API_KEY,
    CURLOPT_POSTFIELDS => http_build_query($data)
]);

$response = curl_exec($ch);

curl_close($ch);

echo $response;
*/

