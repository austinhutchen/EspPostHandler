<?php
// Database connection parameters
$servername = "your_mysql_server";
$username = "your_mysql_username";
$password = "your_mysql_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from ESP32
$data = $_GET['data'];

// Insert data into the database
$sql = "INSERT INTO sensor_data (value) VALUES ('$data')";
if ($conn->query($sql) === TRUE) {
    echo "Data stored successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

