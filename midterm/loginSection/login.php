<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // usr & pw
    $valid_username = 'user';
    $valid_password = 'User123';

    if ($username === $valid_username && $password === $valid_password) {
        // set session
        $_SESSION['username'] = $username;
        header("Location: /midterm/HomePageSection/home.html"); // home page
        exit();
    } else {
        echo "Invalid username or password.";
    }
}