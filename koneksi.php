<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'rest_api_crud_php');


$db_connect = mysqli_connect(HOST, USER, PASS, DB) or die ('Unable to Connect Database');

header('Content-Type: application/json');


?>