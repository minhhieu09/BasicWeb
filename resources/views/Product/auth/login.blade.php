<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<div id="loginForm">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf <!-- Thêm CSRF token để bảo mật -->

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="javascript:void(0)" onclick="showRegisterForm()">Register</a></p>
</div>

<!-- Form Tạo Tài Khoản -->
<div id="registerForm" style="display: none;">
    <h2>Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf <!-- Thêm CSRF token để bảo mật -->

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required><br><br>

        <input type="submit" value="Register">
    </form>
    <p>Already have an account? <a href="javascript:void(0)" onclick="showLoginForm()">Login</a></p>
</div>

<script>
    function showLoginForm() {
        document.getElementById('loginForm').style.display = 'block';
        document.getElementById('registerForm').style.display = 'none';
    }

    function showRegisterForm() {
        document.getElementById('registerForm').style.display = 'block';
        document.getElementById('loginForm').style.display = 'none';
    }
</script>

</html>
