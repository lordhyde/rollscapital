<?php
require_once('init.php');

if(!(isset($_SESSION['is_admin']) && $_SESSION['is_admin'])){
    http_response_code(403); // Set HTTP status code to 403 (Forbidden)
    echo "Not Allowed: You do not have permission to access this resource.";
    die();
}

require_once('db_connect.php');

// Check if a file was uploaded successfully
if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $user_id = $_POST['user_id'];

    // Check for errors during the upload
    if ($file['error'] === UPLOAD_ERR_OK) {
        // Specify the directory where you want to save the uploaded file
        $uploadDirectory = 'files/'; // Replace with your desired directory

        // Create the directory if it doesn't exist
        if (!file_exists($uploadDirectory)) {
            mkdir($uploadDirectory, 0777, true);
        }

        // Generate a unique filename to avoid overwriting existing files
        $uniqueFilename = uniqid() . '_' . $file['name'];

        // Move the uploaded file to the specified directory
        $destinationPath = $uploadDirectory . $uniqueFilename;
        if (move_uploaded_file($file['tmp_name'], $destinationPath)) {
            $sql = "INSERT INTO rc_files (`user_id`,`filename`, `upload_date`, `original_filename`) VALUES (?, ?, NOW(), ?)";
            $db->query($sql, [$user_id, $uniqueFilename, $file['name']]);
            echo 'Success';
        } else {
            echo 'Error: Unable to move the uploaded file.';
        }
    } else {
        echo 'Error during file upload: ' . $file['error'];
    }
} else {
    echo 'No file uploaded.';
}
