<?php

require_once('koneksi.php');

parse_str(file_get_contents('php://input'), $value);

$id = $value['id'];

$query = "DELETE FROM data WHERE id='$id'";
$sql = mysqli_query($db_connect, $query);

if($sql){
    echo json_encode(array('message' => 'Data Deleted Success!'));
} 
else{
    echo json_encode(array('data' => 'Error'));
}



?>