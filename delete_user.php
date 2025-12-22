<?php
require_once ('init.php');

if(!(isset($_SESSION['is_admin']) && $_SESSION['is_admin'])){
    http_response_code(403); // Set HTTP status code to 403 (Forbidden)
    echo "Not Allowed: You do not have permission to access this resource.";
    die();
}

require_once ('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["confirm_delete"])) {
    // Get the user_id to delete from the POST data
    $user_id = $_POST["user_id"];

    try{
        $sql = "DELETE FROM rc_users WHERE id = ?";
        $result = $db->query($sql, [$user_id]);
        if ($result) {
            echo "User deleted successfully!";
        } else {
            echo "Error: Unable to delete the user.";
        }
    } catch(Exception $e){
        echo "Error: Unable to delete the user.";
    }
} else {
    echo "Invalid request.";
}