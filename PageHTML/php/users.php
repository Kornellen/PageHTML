<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $serverName = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users";

    $conn = new mysqli($serverName, $username, $password, $dbname);

    if (!$conn) {
        die("No connection". mysqli_connect_error());
    }

    $sql = "SELECT * FROM profiles";
    $result = mysqli_query($conn, $sql);

    $userID = "SELECT userID  FROM profiles";
    $userName = "SELECT userName  FROM profiles";
    $userPassword = "SELECT userPassword  FROM profiles";

    if ($userID && $userName && $userPassword == $sql) {
        echo "<a href='profile.html'>" .  "</a>";
    }

    mysqli_close($conn);
    ?>
</body>
</html>