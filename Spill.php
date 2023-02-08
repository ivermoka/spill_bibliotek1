<?php

$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'Spillbibliotek1';
$db_port = 8888;
$mysqli = new mysqli(
  $db_host,
  $db_user,
  $db_password,
  $db_db
);

$Select_Spill = "SELECT * FROM Spill";
$result = mysqli_query($mysqli, $Select_Spill);
if ($result->num_rows > 0) {
  $data = array();
  while ($row = $result ->fetch_assoc()){
    $data[]=$row;
  }
}

?>