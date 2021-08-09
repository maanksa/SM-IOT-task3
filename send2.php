<?php
$servername  = "localhost";
$username = "Maan";
$password = "123456";
$dbname = "robotengine";
$a=1;
$Forward = $_POST["Forward"]??"Hello";
$Left = $_POST["Left"]??"Hello";
$Right = $_POST["Right"]??"Hello";
$Backward = $_POST["Backward"]??"Hello";
$Stop = $_POST["Stop"]??"Hello";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if($Forward=="Forward"){
  $sql = "UPDATE dockstation SET Movement = 'Forward' ";
  if ($conn->query($sql) === TRUE) {

  } else {
    echo "Error updating record: " . $conn->error;
  }
}
if($Right=="Right"){
  $sql = "UPDATE dockstation SET Movement = 'Right' ";
  if ($conn->query($sql) === TRUE) {

  } else {
    echo "Error updating record: " . $conn->error;
  }
}
if($Left=="Left"){
  $sql = "UPDATE dockstation SET Movement = 'Left' ";
  if ($conn->query($sql) === TRUE) {

  } else {
    echo "Error updating record: " . $conn->error;
  }
}
if($Backward=="Backward"){
  $sql = "UPDATE dockstation SET Movement = 'Backward' ";
  if ($conn->query($sql) === TRUE) {

  } else {
    echo "Error updating record: " . $conn->error;
  }
}
if($Stop=="Stop"){
  $sql = "UPDATE dockstation SET Movement = 'Stop' ";
  if ($conn->query($sql) === TRUE) {

  } else {
    echo "Error updating record: " . $conn->error;
  }
}


$conn->close();

?>
