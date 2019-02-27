<?php
require '../vendor/autoload.php';
$client = new \ GuzzleHttp\Client();

$response = $client ->request('GET',
'http://jsonplaceholder.typicode.com/posts/20',[]);
//var_dump($response->getbody()->getContents());
//echo $response->getBody();
$str = $response->getBody()->getContents();
$data = json_decode($str);
echo $data->title;

echo '<hr>';


$response = $client ->request('GET',
'http://jsonplaceholder.typicode.com/posts',[]);
//var_dump($response->getbody()->getContents());
//echo $response->getBody();
$str = $response->getBody()->getContents();
$arr = json_decode($str);//convert data json ke array/object dlm PHP
//var_dump($arr);
foreach ($arr as $data){
    echo $data->title . '<br>';
}