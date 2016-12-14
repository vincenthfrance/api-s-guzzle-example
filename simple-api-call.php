<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();
$res = $client->request('GET', 'http://coop.apps.knpuniversity.com/api/me', [
    'headers' => [
        'Authorization' => 'Bearer 819fb62df063f87b6c6e9cb2cea5e720e94796c1'    
    ]
]);

echo $res->getStatusCode();
echo $res->getHeaderLine('content-type');
echo $res->getBody();