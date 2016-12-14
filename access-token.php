<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();
$response = $client->request('POST', 'http://coop.apps.knpuniversity.com/token', [
    'form_params' => [
        'client_id'     => 'souhailtestapp',
        'client_secret' => '7dddf6b9b082a6ffe835d83ead3647c6',
        'grant_type'    => 'client_credentials',
    ]
]);
$status_code  = $response->getStatusCode();
$content_type = $response->getHeader('content-type');

$body_object  = $response->getBody(); //Return Steam Object
$body_content = $body_object->getContents(); //Return String Json

$token        = json_decode($body_content)->access_token; //Return the token as a string

var_dump($token->access_token);