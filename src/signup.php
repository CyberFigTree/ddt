<?php
session_start();

$servername = "mysql";
$username = "php";
$password = "php";
$database = "cloud_computing";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
//
// Check connection
 if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
   }

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['name']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO DOG (name, password, email) VALUES ('$username', '$hashed_password', '$email')";
    $last_id = $conn->insert_id; // Get the ID of the newly registered user
    
    if ($conn->query($sql) === TRUE) {
	$_SESSION['user_id'] = $last_id;    
	header("Location: login.html");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>														  29,1-8        All
