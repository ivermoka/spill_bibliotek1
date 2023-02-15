<?php

// connection parameters:
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_name = 'Spillbibliotek1';
$db_port = 8888;
$mysqli = new mysqli( //connection object!
  $db_host,
  $db_user,
  $db_password,
  $db_db
);

$mysqli = new mysqli($db_host, $db_user, $db_password , $db_name);


if($mysqli->connect_error) 
    die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
else {
    return $mysqli;
}


?>