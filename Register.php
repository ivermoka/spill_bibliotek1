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
if(isset($_REQUEST['registrer'])){
  var_dump($_POST);
  $brukernavn = mysqli_real_escape_string($mysqli, $_POST["brukernavn"]); //plaintext
  $passord = mysqli_real_escape_string($mysqli, $_POST["passord"]);
  $pw_hash = password_hash($passord, PASSWORD_BCRYPT); // kryptert string (hash)
  $sql = "INSERT INTO Brukere (BrukerID, Brukernavn, Passord, Email, Navn, Tlf) VALUES (NULL, '$brukernavn', '$pw_hash', 'Sindretf@drit', 'Sindre Fornes', 324234) ";
  echo password_verify($passord, $pw_hash);
  echo $sql;
  if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}
}

$sql_delete = "DELETE FROM Brukere";
//mysqli_query($conn, $sql_delete);

if (!$mysqli){
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