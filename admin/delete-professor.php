<?php
require_once "include/header.php";
require_once "include/connection.php"; // Database connection

// Fetch the professor ID from the URL
if (isset($_GET['id'])) {
    $professor_id = $_GET['id'];

    // Delete professor from the users table
    $query = "DELETE FROM users WHERE id = '$professor_id' AND role = 'professor'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>
        $(document).ready(function() {
            $('#showModal').modal('show');
            $('#linkBtn').attr('href', 'manage-professor.php');
            $('#linkBtn').text('View All Professors');
            $('#addMsg').text('Professor Deleted Successfully!');
            $('#closeBtn').text('Close');
        });
        </script>";
    } else {
        echo "<script>
        $(document).ready(function() {
            $('#showModal').modal('show');
            $('#linkBtn').attr('href', 'manage-professor.php');
            $('#linkBtn').text('View All Professors');
            $('#addMsg').text('Error deleting professor. Please try again later.');
            $('#closeBtn').text('Close');
        });
        </script>";
    }
} else {
    echo "<script>
    $(document).ready(function() {
        $('#showModal').modal('show');
        $('#linkBtn').attr('href', 'manage-professor.php');
        $('#linkBtn').text('View All Professors');
        $('#addMsg').text('Invalid request.');
        $('#closeBtn').text('Close');
    });
    </script>";
}
?>

<?php 
require_once "include/footer.php";
?>
