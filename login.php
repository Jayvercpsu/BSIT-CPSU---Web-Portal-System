<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSIT Login</title>
    <link rel="stylesheet" href="./assets/css/home-login.css">
    <link rel="stylesheet" href="./assets/css/home-login-signup.css">
</head>

<body>

    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <div class="container">
        <div class="logo-container">
            <img src="./assets/image/bsit_logo.png" alt="BSIT Logo">
            <h1>BSIT</h1>
        </div>

        <!-- Login Form -->
        <form class="form" id="loginForm">
            <div class="form-title"><span>Sign in to your</span></div>
            <div class="title-2"><span>ACCOUNT</span></div>
            <div class="input-container">
                <input placeholder="Email" type="email" class="input-mail" required />
            </div>
            <div class="input-container">
                <input placeholder="Password" type="password" class="input-pwd" required />
            </div>
            <button class="submit" type="submit">
                <span class="sign-text">Sign in</span>
            </button>
            <p class="signup-link">
                No account? <a class="up" href="signup.php">Sign up!</a>
            </p>
            <p class="signup-link">
                <a href="index.php" style="color: white;">Back Home</a> |
                <a href="#" style="color: white;">Forgot Password?</a>
            </p>
        </form>
    </div>

    <script>
        // Hide preloader when the window is loaded
        window.onload = function() {
            document.getElementById('preloader').style.display = 'none';
        };
    </script>

</body>

</html>