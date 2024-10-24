<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple dummy login for demonstration purposes
    // Replace this part with your database logic
    $valid_username = 'user';
    $valid_password = 'User123';

    if ($username === $valid_username && $password === $valid_password) {
        // Set session
        $_SESSION['username'] = $username;
        header("Location: home.html"); // Redirect to the home page
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>
