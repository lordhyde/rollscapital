<?php
require_once ('init.php');

if(!(isset($_SESSION['is_admin']) && $_SESSION['is_admin'])){
    http_response_code(403); // Set HTTP status code to 403 (Forbidden)
    echo "Not Allowed: You do not have permission to access this resource.";
    die();
}

require_once ('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["user_id"]) && isset($_POST["new_password"])) {

    $user_id = $_POST["user_id"];
    $new_password = hash('sha256', $_POST["new_password"]);

    $sql = "UPDATE rc_users SET `password` = ? WHERE id = ?";
    $result = $db->query($sql, [$new_password, $user_id]);

    if ($result) {
        echo "Password changed successfully!";
    } else {
        echo "Error: Unable to change the password.";
    }
} else {
    echo "Invalid request.";
}
 