<?php
session_start();
$servername = "mysql";
$username = "php";
$password = "php";
$database = "cloud_computing";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

// Assuming user's unique identifier is 'id' and stored in session after successful login
$userId = $_SESSION['user_id'];
print_r($user_id);
$sql = "SELECT * FROM DOG WHERE id = '$userId'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $name = $row['NAME'];
    $email = $row['EMAIL'];
    header("Location: profile.html");    
    exit();
} else {
    die("Error fetching user data");
}
mysqli_close($conn);
?>

