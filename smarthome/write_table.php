<?php
$servername = "localhost";
$username = "root";
$password = "hibah2017mysqlroot";
$dbname = "smarthome";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Port_Functions (No, Function, Internal, Name, Location, Group, Number, Pin)
VALUES (1, 'Output', 'Relay 220V', 'Lampu 1', 'Dalam Rumah', 1, 'Lampu 1', 'PA1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
