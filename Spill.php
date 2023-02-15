<?php

include ('db.php');


// definer spørring for å hente ut spill
$Select_Spill = "SELECT * FROM Spill";

// kjør spørringen
$result = $mysqli->query($Select_Spill);

if ($result->num_rows > 0) {
  $data = array();
  while ($row = $result ->fetch_assoc()){
    $data[]=$row;
  }
}
return $data;


?>