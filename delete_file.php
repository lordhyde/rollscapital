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
    $file_id = $_POST["file_id"];

    try{
        $sql = "SELECT filename FROM rc_files WHERE id = ?";
        $result = $db->query($sql, [$file_id])->fetchArray();

        $file_path = __DIR__."/files/".$result['filename'];

        $sql = "DELETE FROM rc_files WHERE id = ?";
        $result = $db->query($sql, [$file_id]);

        if ($result) {
            if (file_exists($file_path)){
                unlink($file_path);
            }
            echo "Document deleted successfully!";
        } else {
            echo "Error: Unable to delete the document.";
        }
    } catch(Exception $e){
        echo "Error: Unable to delete the document.";
    }
} else {
    echo "Invalid request.";
}