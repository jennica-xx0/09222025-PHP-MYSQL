<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}
// echo "✅ Connected successfully to database: " . $dbname;
?>
