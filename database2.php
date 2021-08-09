<?php

$servername  =  "localhost";
$username = "Maan";
$password = "123456";
$dbname = "robotengine";
$a=1;

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Movement  FROM dockstation";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Engines Status =   ". $row["Movement"].  "<br>";;
    }
} else {
    echo "0 results";
}
$conn->close();
 ?>
