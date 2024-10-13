<?php
$host = 'localhost';  // Replace with your host
$user = 'root';       // Replace with your DB username
$pass = '';           // Replace with your DB password
$dbname = 'auth'; // Database name

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo ""; 
}
?>
