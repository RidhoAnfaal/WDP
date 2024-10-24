$(document).ready(function() {
    $('#loginForm').on('submit', function(e) {
        let valid = true;
        let username = $('#username').val();
        let password = $('#password').val();

        // Clear previous error messages
        $('#username-error').text('');
        $('#password-error').text('');

        // Username validation
        if (username === '') {
            $('#username-error').text('Must be filled.');
            valid = false;
        }

        // Password validation
        if (password === '') {
            $('#password-error').text('Must be filled.');
            valid = false;
        } else if (password.length <= 6) {
            $('#password-error').text('Password is more than 6 characters.');
            valid = false;
        } else if (!/[a-z]/.test(password) || !/[A-Z]/.test(password)) {
            $('#password-error').text('Password must be uppercase and lowercase.');
            valid = false;
        }

        if (!valid) {
            e.preventDefault(); // Prevent form submission
        }
    });
});
