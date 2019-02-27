<?php
/*
JSON notation
[] = array
{} = object
    "key":"val"
sample: ["nama": "azman"]
- mesti " , x boleh '
- number, tak perlu "", i.e "umur":40
*/

//create obj tanpa custom class
$obj = new stdClass();
$obj->nama = 'Juhaidah';
$obj->alamat = 'Putrajaya';

//convert obj kpd string JSON
echo json_encode($obj);
echo "<hr>";

$arr = ['nama' => 'John Doe', 'umur' => 40];
echo json_encode($arr,);
//echo $data;
//$data2 = json_decode($data, true);
//var_dump($data2);


//json_encode
// - convert arr/obj json dlm PHP kpd JSON string
//json_decode
// - convert string json kpd array/obj dlm PHP