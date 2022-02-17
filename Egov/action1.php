<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pavan";

$des = $_GET["des"];
$chei = $_GET['chei'];
$cheo= ($_GET['cheo']);
$room=($_GET['room']);
$adu=($_GET['adu']);
$chi=($_GET['chi']);

echo $chei;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO hotel (Hotel,Check_in,Check_out,Rooms,Adults,Children)
VALUES ('$des', '$chei', '$cheo','$room','$adu','$chi')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>