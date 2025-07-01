<?php
include_once "../config/db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($password !== $confirmPassword) {
        echo "❌ Passwords do not match!";
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    try {
        $query = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
        $stmt = $conn->prepare($query);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);

        if ($stmt->execute()) {
            echo "<span style='color:green;'>✅ User Registered Successfully!</span>";
        } else {
            echo "❌ Failed to register user.";
        }
    } catch (PDOException $e) {
        if($e->getCode() == 23000){  // Duplicate Email Error
            echo "❌ Email already exists.";
        } else {
            echo "❌ Error: Something went wrong.";
        }
    }
} else {
    echo "❌ Invalid request.";
}
?>
