<?php
$host = "localhost";
$db_name = "mfel";   // Apne database ka naam
$username = "root";        // XAMPP ka default username
$password = "";            // XAMPP me password mostly blank hota hai

try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Database Connected Successfully"; // Optional: Connection test
} catch(PDOException $e) {
    echo "Connection failed: Something went wrong.";
}
?>
