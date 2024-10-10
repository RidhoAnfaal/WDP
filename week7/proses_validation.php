<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $errors = [];

    // Server-side validation for the password
    if (strlen($password) < 8) {
        $errors[] = "Password harus minimal 8 karakter.";
    }

    if (empty($errors)) {
        // If no errors, process the form
        echo "Nama: $nama <br>";
        echo "Email: $email <br>";
        echo "Password: Valid<br>";
    } else {
        // If there are errors, display them
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
