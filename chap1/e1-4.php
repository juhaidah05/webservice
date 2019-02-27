<?php
require '../vendor/autoload.php';
$client = new \ GuzzleHttp\Client();

$response = $client ->request('GET', 'http://localhost/webservice/chap1/data3.php',
['query'=> ['foo'=>'bar']]);
echo $response->getBody();

$response2 = $client ->request('POST', 'http://localhost/webservice/chap1/data2.php',
[
    'form_params' => [
        'field_name' => 'abc',
        'other_field' => '123',
        'nested_field' => [
            'nested' => 'hello'
        ]
    ]
]);
    echo $response2->getBody();