<?php
require_once ('init.php');

if(!(isset($_SESSION['is_admin']) && $_SESSION['is_admin'])){
    http_response_code(403); // Set HTTP status code to 403 (Forbidden)
    echo "Not Allowed: You do not have permission to access this resource.";
    die();
}

require_once ('db_connect.php');

// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve user data from the POST request
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = hash('sha256', $_POST["password"]);
    $email = $_POST["email"];
    $level = $_POST["level"];

    // Validate and sanitize the data as needed

    $sql = "INSERT INTO rc_users (`name`, `username`, `password`, `email`, `level`) VALUES (?, ?, ?, ?, ?)";
    $result = $db->query($sql, [$name, $username, $password, $email, $level]);

    if ($result) {
        echo "User created successfully!";
    } else {
        echo "Error: Unable to create the user.";
    }
} else {
    echo "Invalid request method.";
}