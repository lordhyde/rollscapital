<?php
require_once('init.php');
require_once("db_connect.php"); // Connect to your database

$_SESSION["user_id"] = null;
$_SESSION["username"] = null;

if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password = hash('sha256', $password);
    

    // Implement secure SQL query using prepared statements
    $results = $db->query("SELECT `id`, `username`,`level` FROM `rc_users` WHERE `username` = ? AND `password` = ?", [$username, $password])->fetchArray();

    if ($results) {
        // Successful login, create a session
        $_SESSION["user_id"] = $results["id"];
        $_SESSION["username"] = $results["username"];
        $_SESSION["is_admin"] = $results["level"] === 'admin';

        echo "success";
    } else {
        // Invalid credentials
        echo "failure";
    }
} else {
    // Handle invalid input
    echo "invalid input";
}
