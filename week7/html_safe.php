<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'];

    echo $input;
    echo "<br>";
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email valid: " . $email;
    } else {
        echo "Email tidak valid, harap masukkan email yang valid.";
    }
} else {
    echo "Email tidak diisi.<br>";
}
