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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pswd']); 

    $sql = "SELECT * FROM DOG WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Verify password
        if (password_verify($password, $row['PASSWORD'])) {
	    // Password is correct
            $_SESSION['loggedin'] = true;
	    $_SESSION['email'] = $row['EMAIL'];
	    $_SESSION['user_id'] = $row['ID'];
	    session_write_close();
	    print_r($_SESSION);
	    header("Location: profile.php");
	    exit();
        } else {
            echo "Wrong password!";
        }
    } else {
        echo "Email not found";
    }
}

mysqli_close($conn);
?>
