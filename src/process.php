<?php
$servername = "mysql";  // Matches MySQL service name in docker-compose.yml
$username = "php";       // Matches MYSQL_USER
$password = "php";       // Matches MYSQL_PASSWORD
$database = "cloud_computing"; // Your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "SQL connected successfully! <br>";
echo "Server Info: " . mysqli_get_server_info($conn);
?>
