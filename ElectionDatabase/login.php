<?php
session_start();

// Hardcoded credentials (for demonstration purposes)
$validUsername = 'admin';
$validPassword = 'password123';

// Get the form data
$username = $_POST['username'];
$password = $_POST['password'];

// Validate credentials
if ($username === $validUsername && $password === $validPassword) {
    // Set session variables
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $username;

    // Redirect to the home page
    header('Location: home.php');
    exit();
} else {
    // Redirect back to login page with error
    $error = 'Invalid username or password!';
    header('Location: login.html?error=' . urlencode($error));
    exit();
}
?>
