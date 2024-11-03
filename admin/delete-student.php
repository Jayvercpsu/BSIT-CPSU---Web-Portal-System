<?php
require_once "include/header.php";
require_once "include/connection.php"; // Database connection

// Fetch the student ID from the URL
$student_id = $_GET["id"];

// Handle deletion
if (isset($student_id)) {
    $delete_query = "DELETE FROM users WHERE id = '$student_id'";
    if (mysqli_query($conn, $delete_query)) {
        echo "<script>
        $(document).ready(function() {
            $('#showModal').modal('show');
            $('#linkBtn').attr('href', 'manage-students.php');
            $('#linkBtn').text('View All Students');
            $('#addMsg').text('Student Deleted Successfully!');
            $('#closeBtn').text('Close');
        });
        </script>";
    } else {
        echo "<script>
        $(document).ready(function() {
            $('#showModal').modal('show');
            $('#linkBtn').attr('href', 'manage-students.php');
            $('#linkBtn').text('View All Students');
            $('#addMsg').text('Error deleting student. Please try again later.');
            $('#closeBtn').text('Close');
        });
        </script>";
    }
} else {
    echo "<script>
    $(document).ready(function() {
        $('#showModal').modal('show');
        $('#linkBtn').attr('href', 'manage-students.php');
        $('#linkBtn').text('View All Students');
        $('#addMsg').text('Invalid request.');
        $('#closeBtn').text('Close');
    });
    </script>";
}
?>

<?php 
require_once "include/footer.php";
?>
