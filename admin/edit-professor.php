<?php
require_once "include/header.php";

$name_error = $email_error = $name = "";

// Assuming you have a way to get the professor ID (e.g., from a query string)
if (isset($_GET['id'])) {
    $professor_id = $_GET['id'];

    // Database connection 
    require_once "include/connection.php";
    
    // Fetch professor data
    $query = "SELECT * FROM users WHERE id = '$professor_id' AND role = 'professor'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $professor = mysqli_fetch_assoc($result);
        $name = $professor['full_name'];
        $email = $professor['email'];
    } else {
        // Handle case where professor is not found
        echo "<p style='color:red'> * Professor not found.</p>";
    }
}

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

    if (!empty($name) && empty($email_error)) {
        // Database connection 
        require_once "include/connection.php";
        
        // Check if the email already exists (except for the current professor's email)
        $email_check = "SELECT * FROM users WHERE email = '$email' AND id != '$professor_id'";
        $result = mysqli_query($conn, $email_check);

        if (mysqli_num_rows($result) > 0) {
            $email_error = "<p style='color:red'> * Email already exists </p>";
        } else {
            // Update professor data in the users table
            $update_user = "UPDATE users SET full_name = '$name', email = '$email' WHERE id = '$professor_id'";
            $update = mysqli_query($conn, $update_user);
            if ($update) {
                echo "<script>
                $(document).ready(function() {
                    $('#showModal').modal('show');
                    $('#linkBtn').attr('href', 'manage-professors.php');
                    $('#linkBtn').text('View All Professors');
                    $('#addMsg').text('Professor Updated Successfully!');
                    $('#closeBtn').text('Update More');
                });
                </script>";
            } else {
                // Handle update error
                $name_error = "<p style='color:red'> * Error updating professor. Please try again later.</p>";
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
                            <h4 class="text-center pb-3">Edit Professor</h4>
                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] . '?id=' . $professor_id); ?>">
                                <div class="form-group">
                                    <label>Professor Name:</label>
                                    <input type="text" class="form-control" value="<?php echo htmlspecialchars($name); ?>" name="professor_name">
                                    <?php echo $name_error; ?>
                                </div>
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="email" class="form-control" value="<?php echo htmlspecialchars($email); ?>" name="professor_email">
                                    <?php echo $email_error; ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Update</button>
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
