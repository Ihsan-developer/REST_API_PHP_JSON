<?php

require_once('koneksi.php');

$note = $_POST['notes'];


$query = "INSERT INTO data(notes) VALUES ('$note')";
$sql = mysqli_query($db_connect, $query);

    if($sql){
        echo json_encode(array('message' => 'Data Created Success!'));
    } 
    else{
        echo json_encode(array('data' => 'Error'));
    }

    
?>