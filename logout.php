<?php
// Start or resume the session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect the user to a login page or any other desired page
header("Location: /"); // Replace with the desired redirect URL
exit();