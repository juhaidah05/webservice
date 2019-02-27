<?php
include 'db.php';
include 'token.php';
//verify token (scenario pertama, server client php call web service)
isToken(); //



// check jika client x hantar id, default to '0'
$id = isset ($_GET['id']) ? $_GET['id'] : 0 ;
$sql = "SELECT * FROM film WHERE film_id = $id";
$rs = mysqli_query($con, $sql);

if ($rs) 
{
    //ada data
    $rows = mysqli_fetch_array($rs);
    //$data = mysqli_fetch_array($rs);
    if (!$rows) {
        //id tak wujud
        $data = new stdClass();
        $data->err = 'No Data'; 
    } else {
        $data = $rows;
    }
}else{
    // query prob, i.e id = character
    $data = new stdClass();
    $data->err = 'No Data'; 
    //tiada data
}

header('Content-Type: application/json');
echo json_encode($data);