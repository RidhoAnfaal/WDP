<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input dengan Validasi AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Form Input dengan Validasi menggunakan AJAX</h1>
    <form id="myForm">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color:red;"></span>
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color:red;"></span>
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color:red;"></span>
        <br>

        <input type="submit" value="Submit" id="submit-button">
    </form>

    <div id="result"></div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(e) {
                e.preventDefault(); // Prevent form from submitting normally

                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // Validate name
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                // Validate email
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                // Validate password (minimum 8 characters)
                if (password.length < 8) {
                    $("#password-error").text("Password harus minimal 8 karakter.");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                if (valid) {
                    $.ajax({
                        url: "proses_validation.php", // Change this to your server-side PHP file
                        type: "POST",
                        data: {
                            nama: nama,
                            email: email,
                            password: password
                        },
                        success: function(response) {
                            // Show the server response (result of the PHP)
                            $("#result").html(response);
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>