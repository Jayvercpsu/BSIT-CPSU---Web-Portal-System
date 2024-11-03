<?php
// Include your database connection
include('./include/connection.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullName = mysqli_real_escape_string($conn, $_POST['fullName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $year = isset($_POST['year']) ? mysqli_real_escape_string($conn, $_POST['year']) : null;

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into the database
    $sql = "INSERT INTO users (full_name, email, password, role" . ($role === 'student' ? ", year" : "") . ") VALUES ('$fullName', '$email', '$hashedPassword', '$role'" . ($role === 'student' ? ", '$year'" : "") . ")";
    
    if (mysqli_query($conn, $sql)) {
        // Redirect to login page after successful registration
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSIT Sign Up</title>
    <link rel="stylesheet" href="./assets/css/home-signup.css">
    <link rel="stylesheet" href="./assets/css/home-login-signup.css">
    <script>
        function toggleYearSelect() {
            const roleSelect = document.getElementById('role');
            const yearSelect = document.getElementById('yearSelect');
            yearSelect.style.display = (roleSelect.value === 'student') ? 'block' : 'none';
        }
    </script>
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
    <form class="form" id="signUpForm" method="POST">
        <div class="form-title"><span>Create your</span></div>
        <div class="title-2"><span>ACCOUNT</span></div>
        <div class="input-container">
            <input placeholder="Full Name" name="fullName" type="text" class="input-name" required />
        </div>
        <div class="input-container">
            <input placeholder="Email" name="email" type="email" class="input-mail" required />
        </div>
        <div class="input-container">
            <input placeholder="Password" name="password" type="password" class="input-pwd" required />
        </div>
        <div class="input-container">
            <select id="role" name="role" class="input-role" required onchange="toggleYearSelect()">
                <option value="" disabled selected>Select Role</option>
                <option value="student">Student</option>
                <option value="professor">Professor</option>
            </select>
        </div>
        <div id="yearSelect" class="input-container" style="display: none;">
            <select name="year" class="input-year" required>
                <option value="" disabled selected>Select Year</option>
                <option value="1st Year">1st Year</option>
                <option value="2nd Year">2nd Year</option>
                <option value="3rd Year">3rd Year</option>
                <option value="4th Year">4th Year</option>
            </select>
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
