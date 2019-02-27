<?php
require "../vendor/autoload.php";// include semua lib dari vendor
$url = "http://localhost/webservice/chap1/data2.php";
$data = ["name" => "Lorna", "email"=>"Lorna@example.com"];
$client = new \GuzzleHttp\Client();
$result= $client->post($url, ["json"=>$data]);
echo $result->getBody();