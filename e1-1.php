<?php

$url = 'http://localhost/webservice/e1-1.php';
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
$result = curl_exec($ch);
echo $result;
curl_close($ch);
?>