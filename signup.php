<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="app.js" rel="stylesheet"></script>
    <title>Sign Up</title>
  </head>
  <body>
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
      
      
      $sql = "DELETE FROM Brukere WHERE BrukerID = 2";
      $result = mysqli_query($conn, $sql) 
      
      $sql_fetch_things = "SELECT * FROM Brukere";
      
      $result = mysqli_query($conn, $sql_fetch_things);
      while( $row = $result->fetch_array()){
        //print_r($row);
        echo "<br />";
        echo "BrukerID: " . $row["BrukerID"] . "<br />";
        echo "Brukernavn: " . $row["Brukernavn"] . "<br />";
        echo "Passord: " . $row["Passord"] . "<br />";
        echo "Email: " . $row["Email"] . "<br />";
      }
      
      
      echo "<td>" . $result;
      ?>
    <form method="post">
      <input
        type="submit"
        name="button1"
        class="button1 bg-white"
        value="Button1"
      />
    </form>
    <div class="inset-x-0 top-0"></div>
  </body>
</html>
