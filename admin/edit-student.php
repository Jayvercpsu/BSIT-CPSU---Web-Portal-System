<?php
require_once "include/header.php";

$name_error = $email_error = $year_error = $name = $email = $year = "";

// Assuming you have a way to get the student ID (e.g., from a query string)
if (isset($_GET['id'])) {
    $student_id = $_GET['id'];

    // Database connection 
    require_once "include/connection.php";
    
    // Fetch student data
    $query = "SELECT * FROM users WHERE id = '$student_id' AND role = 'student'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $student = mysqli_fetch_assoc($result);
        $name = $student['full_name'];
        $email = $student['email'];
        $year = $student['year'];
    } else {
        // Handle case where student is not found
        echo "<p style='color:red'> * Student not found.</p>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_REQUEST["student_name"])) {
        $name_error = "<p style='color:red'> * Student Name Required</p>";
    } else {
        $name = $_REQUEST["student_name"];
    }

    // Validate email
    if (empty($_REQUEST["student_email"])) {
        $email_error = "<p style='color:red'> * Email Required</p>";
    } else {
        $email = $_REQUEST["student_email"];
        // Optional: Add email format validation
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "<p style='color:red'> * Invalid email format</p>";
        }
    }

    // Validate year
    if (empty($_REQUEST["student_year"])) {
        $year_error = "<p style='color:red'> * Year Required</p>";
    } else {
        $year = $_REQUEST["student_year"];
    }

    if (!empty($name) && !empty($email) && !empty($year) && empty($email_error)) {
        // Database connection 
        require_once "include/connection.php";
        
        // Check if the email already exists (except for the current student's email)
        $email_check = "SELECT * FROM users WHERE email = '$email' AND id != '$student_id'";
        $result = mysqli_query($conn, $email_check);

        if (mysqli_num_rows($result) > 0) {
            $email_error = "<p style='color:red'> * Email already exists </p>";
        } else {
            // Update student data in the users table
            $update_user = "UPDATE users SET full_name = '$name', email = '$email', year = '$year' WHERE id = '$student_id'";
            $update = mysqli_query($conn, $update_user);
            if ($update) {
                echo "<script>
                $(document).ready(function() {
                    $('#showModal').modal('show');
                    $('#linkBtn').attr('href', 'manage-students.php');
                    $('#linkBtn').text('View All Students');
                    $('#addMsg').text('Student Updated Successfully!');
                    $('#closeBtn').text('Update More');
                });
                </script>";
            } else {
                // Handle update error
                $name_error = "<p style='color:red'> * Error updating student. Please try again later.</p>";
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
                            <h4 class="text-center pb-3">Edit Student</h4>
                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] . '?id=' . $student_id); ?>">
                                <div class="form-group">
                                    <label>Student Name:</label>
                                    <input type="text" class="form-control" value="<?php echo htmlspecialchars($name); ?>" name="student_name">
                                    <?php echo $name_error; ?>
                                </div>
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="email" class="form-control" value="<?php echo htmlspecialchars($email); ?>" name="student_email">
                                    <?php echo $email_error; ?>
                                </div>
                                <div class="form-group">
                                    <label>Year:</label>
                                    <select class="form-control" name="student_year">
                                        <option value="" disabled>Select Year</option>
                                        <option value="1st Year" <?php echo ($year == '1st Year') ? 'selected' : ''; ?>>1st Year</option>
                                        <option value="2nd Year" <?php echo ($year == '2nd Year') ? 'selected' : ''; ?>>2nd Year</option>
                                        <option value="3rd Year" <?php echo ($year == '3rd Year') ? 'selected' : ''; ?>>3rd Year</option>
                                        <option value="4th Year" <?php echo ($year == '4th Year') ? 'selected' : ''; ?>>4th Year</option>
                                    </select>
                                    <?php echo $year_error; ?>
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
