<?php
require_once "include/header.php";

$name_error = $email_error = $name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_REQUEST["professor_name"])) {
        $name_error = "<p style='color:red'> * Professor Name Required</p>";
    } else {
        $name = $_REQUEST["professor_name"];
    }

    // Validate email
    if (empty($_REQUEST["professor_email"])) {
        $email_error = "<p style='color:red'> * Email Required</p>";
    } else {
        $email = $_REQUEST["professor_email"];
        // Optional: Add email format validation
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "<p style='color:red'> * Invalid email format</p>";
        }
    }

    if (!empty($name) && !empty($email) && empty($email_error)) {
        // Database connection 
        require_once "include/connection.php";
        
        // Check if the email already exists
        $email_check = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $email_check);

        if (mysqli_num_rows($result) > 0) {
            $email_error = "<p style='color:red'> * Email already exists </p>";
        } else {
            // Insert into users table with role set to 'professor'
            $add_user = "INSERT INTO users (full_name, email, role) VALUES ('$name', '$email', 'professor')";
            $add = mysqli_query($conn, $add_user);
            if ($add) {
                echo "<script>
                $(document).ready(function() {
                    $('#showModal').modal('show');
                    $('#linkBtn').attr('href', 'manage-professor.php');
                    $('#linkBtn').text('View All Professors');
                    $('#addMsg').text('Professor Added Successfully!');
                    $('#closeBtn').text('Add More');
                });
                </script>";
            } else {
                // Handle insertion error
                $name_error = "<p style='color:red'> * Error adding professor. Please try again later.</p>";
            }
        }
    }
}
?>

<div class="login-form-bg h-100">
    <div class="container mt-5 h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5 shadow">                       
                            <h4 class="text-center pb-3">Add Professor</h4>
                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                <div class="form-group">
                                    <label>Professor Name:</label>
                                    <input type="text" class="form-control" value="<?php echo $name; ?>" name="professor_name">
                                    <?php echo $name_error; ?>
                                </div>
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="email" class="form-control" value="<?php echo $email; ?>" name="professor_email">
                                    <?php echo $email_error; ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
require_once "include/footer.php";
?>
