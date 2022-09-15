<?php

require_once('koneksi.php');

parse_str(file_get_contents('php://input'), $value);

$id = $value['id'];
$notes = $value['notes'];

$query = "UPDATE data SET notes='$notes' WHERE id='$id'";
$sql = mysqli_query($db_connect, $query);

if($sql){
    echo json_encode(array('message' => 'Data Updated Success!'));
} 
else{
    echo json_encode(array('data' => 'Error'));
}



?>