<?php
session_start(); // Start a new session

require_once 'connection.php'; // Include your database configuration

// Create a new connection to the database
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME); // Adjust these constants to your config settings

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection to database successful.<br>"; // Debug info

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    echo "Posted email: $email<br>"; // Debug info

    // SQL query to fetch user data for the email
    $query = "SELECT * FROM users WHERE Email = '$email' LIMIT 1";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        echo "User found in database.<br>"; // Debug info
        $user = $result->fetch_assoc();
        
        // Debug info for fetched data
        echo "Fetched email: " . $user['Email'] . "<br>";
        // DO NOT echo out the password hash in a real environment

        // Use password_verify to check the submitted password against the hashed password in the database
        if (password_verify($password, $user['PasswordHash'])) {
            echo "Password verified successfully.<br>"; // Debug info
            $_SESSION['user_id'] = $user['UserID']; // Set a session variable
            header("Location: dashboard.php"); // Redirect to a logged-in page
            exit();
        } else {
            echo "Password verification failed.<br>"; // Debug info
        }
    } else {
        echo "No user found with that email.<br>"; // Debug info
    }

    $conn->close(); // Close the database connection
} else {
    echo "Form not submitted using POST method.<br>"; // Debug info
}
?>