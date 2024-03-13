<?php
session_start();

// Dummy user credentials (replace these with your actual authentication logic)
$valid_username = "user";
$valid_password = "password";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username and password
    if ($username === $valid_username && $password === $valid_password) {
        // Authentication successful, create session
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        // Authentication failed, redirect back to login page
        header("Location: login.html");
        exit;
    }
}
?>
