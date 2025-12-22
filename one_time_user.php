<?php
// Database connection parameters
$db_host = "127.0.0.1";
$db_username = "root";
$db_password = "root";
$db_database = "rolls_capital";
$db_port = "8889";

// User information
$username = 'admin';
$name = "Abraham";
$email = "arp_friends@hotmail.com";
$passwordPlainText = "Secreto1.."; // Replace with the actual plain text password
$level = "admin";

try {
    // Create a new database connection
    $pdo = new PDO("mysql:host=$db_host;port=$db_port;dbname=$db_database", $db_username, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Hash the password using SHA-256
    $hashedPassword = hash('sha256', $passwordPlainText);

    // SQL query to insert a new user into the Users table
    $sql = "INSERT INTO rc_users (username, name, email, password,level) VALUES (:username, :name, :email, :password, :level)";

    // Prepare the SQL statement
    $stmt = $pdo->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashedPassword);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':level', $level);

    // Execute the query to insert the new user
    $stmt->execute();

    echo "User created successfully!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
