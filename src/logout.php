<?php
// Start the session
session_start();

// Unset all the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to the login page or homepage
header("Refresh: 2; URL = login.html");

?>
