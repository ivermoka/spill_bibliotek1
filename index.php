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


if(isset($_REQUEST['registrer'])){
  var_dump($_POST);
  $brukernavn = mysqli_real_escape_string($conn, $_POST["brukernavn"]);
  $passord = mysqli_real_escape_string($conn, $_POST["passord"]);
  $sql = "INSERT INTO Brukere (BrukerID, Brukernavn, Passord, Email, Navn, Tlf) VALUES (2, '$brukernavn', '$passord', 'Sindretf@drit', 'Sindre Fornes', 324234) ";
  echo $sql;
  $result = mysqli_query($conn, $sql);
}


if (!$conn){
    die("connection failed: " . mysqli_connect_error());
}
echo "Connection succeessfully";



// $sql_fetch_things = "SELECT * FROM Brukere";

// $result = mysqli_query($conn, $sql_fetch_things);
// while( $row = $result->fetch_array()){
//   //print_r($row);
//   echo "<br />";
//   echo "BrukerID: " . $row["BrukerID"] . "<br />";
//   echo "Brukernavn: " . $row["Brukernavn"] . "<br />";
//   echo "Passord: " . $row["Passord"] . "<br />";
//   echo "Email: " . $row["Email"] . "<br />";
// }


// echo "<td>" . $result;
// ?>