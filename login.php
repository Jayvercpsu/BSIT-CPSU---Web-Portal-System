<?php
session_start();
include('include/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check in all year tables
    $yearTables = ['first_year', 'second_year', 'third_year', 'fourth_year'];
    $user = null;

    foreach ($yearTables as $table) {
        $sql = "SELECT * FROM $table WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            break; // User found, exit loop
        }
    }

    // If user not found in year tables, check the general users table for professors
    if (!$user) {
        $sql = "SELECT * FROM professors WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
        }
    }

    // Check in users table
    if (!$user) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
        }
    }

    if ($user) {
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['full_name'] = $user['full_name'];

            // Check if role exists before setting it in the session
            if (isset($user['role'])) {
                $_SESSION['role'] = $user['role'];

                // Redirect based on role
                if ($_SESSION['role'] === 'professor') {
                    header("Location: professor_dashboard.php");
                } else {
                    header("Location: student_dashboard.php");
                }
                exit();
            } else {
                echo "<script>alert('User role not found.');</script>";
            }
        } else {
            echo "<script>alert('Invalid email or password.');</script>";
        }
    } else {
        echo "<script>alert('No account found with that email.');</script>";
    }
}
?>

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
        <form class="form" id="loginForm" method="POST">
            <div class="form-title"><span>Sign in to your</span></div>
            <div class="title-2"><span>ACCOUNT</span></div>
            <div class="input-container">
                <input placeholder="Email" name="email" type="email" class="input-mail" required />
            </div>
            <div class="input-container">
                <input placeholder="Password" name="password" type="password" class="input-pwd" required />
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
