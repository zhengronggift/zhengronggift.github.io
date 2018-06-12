<?php
$servername = "lamp.cse.fau.edu/phpMyAdmin/";
$username = "rzheng";
$password = "TPY1QFy4gr";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 
