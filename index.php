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
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_db );

if (!$conn){
    die("connection failed: " . mysqli_connect_error());
}
echo "Connection succeessfully";


// $sql = "DELETE FROM Brukere WHERE BrukerID = 2";
// $result = mysqli_query($conn, $sql) 

$sql_fetch_things = "SELECT * FROM Brukere";

$result = mysqli_query($conn, $sql_fetch_things);

echo "<td>" . $result;
?>