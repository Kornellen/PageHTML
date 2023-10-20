<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <?php 
    $serverName =  "localhost";
    $username = "root";
    $password = "";
    $dbname = "testkodu";


    $conn = mysqli_connect($serverName, $username, $password, $dbname);

    if (!$conn){
      die("Błąd połączenia: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM test";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
      while ($row = mysqli_fetch_assoc($result)){
        echo "<p>" . $row["kolumna1"] . " - " . $row["kolumna2"] . "<p>";
      }
    } else {
      echo "NULL";
    }

    mysqli_close($conn);
    ?>
  </body>
</html>
