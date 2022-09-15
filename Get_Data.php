<?php

require_once('koneksi.php');

$query = "SELECT * FROM data ORDER BY id DESC";
$sql = mysqli_query($db_connect, $query);

if($sql){
    $result = array();
    while($row = mysqli_fetch_array($sql)){
        array_push($result, array(
            'id' => $row['id'],
            'notes' => $row['notes'],
        ));
    }

    echo json_encode(array('data' => $result));
}



?>
