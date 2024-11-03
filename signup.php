<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSIT Sign Up</title>
    <link rel="stylesheet" href="./assets/css/home-signup.css">
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

    <!-- Sign Up Form -->
    <form class="form" id="signUpForm">
        <div class="form-title"><span>Create your</span></div>
        <div class="title-2"><span>ACCOUNT</span></div>
        <div class="input-container">
            <input placeholder="Full Name" type="text" class="input-name" required />
        </div>
        <div class="input-container">
            <input placeholder="Email" type="email" class="input-mail" required />
        </div>
        <div class="input-container">
            <input placeholder="Password" type="password" class="input-pwd" required />
        </div>
        <button class="submit" type="submit">
            <span class="sign-text">Sign up</span>
        </button>
        <p class="signup-link">
            Already have an account? <a class="up" href="login.php">Log in!</a>
        </p>
        <p class="signup-link">
            <a href="index.php" style="color: white;">Back Home</a>
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
