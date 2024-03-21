<?php
// Start session to use for error messages, etc.
session_start();

// Include database configuration file (adjust the path as necessary)
require_once 'connection.php'; // Assumes there's a config.php file with database connection settings

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assign posted values to variables
    $email = trim($_POST['email']);
    $name = trim($_POST['name']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirm-password']);
    $passwordHint = trim($_POST['password-hint']);
    $terms = isset($_POST['terms']); // This will be true if the checkbox is checked

    // Basic validation (you should add more robust validation)
    if (empty($email) || empty($password) || empty($confirmPassword) || !$terms || $password !== $confirmPassword) {
        // Handle errors, such as redirecting back to the form with a message
        $_SESSION['error_message'] = 'Validation failed. Please check your input and try again.';
        header('Location: ../signup.php');
        exit;
    }

    // Create database connection
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME); // Adjust these constants to your config settings

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if user already exists
    $sql = "SELECT UserID FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION['error_message'] = 'User already exists.';
        header('Location: ../signup.php');
        exit;
    }
    $stmt->close();

    // Insert new user (with hashed password)
    $passwordHash = password_hash($password, PASSWORD_DEFAULT); // Hashing the password
    $sql = "INSERT INTO users (Email, UserName, PasswordHash, PasswordHint) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $email, $name, $passwordHash, $passwordHint);

    if ($stmt->execute()) {
        // Redirect to login page or elsewhere upon success
        header('Location: ../../index.php');
    } else {
        // Handle error
        $_SESSION['error_message'] = 'Error creating user.';
        header('Location: ../signup.php');
    }

    $stmt->close();
    $conn->close();
}
?>
