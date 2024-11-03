<?php
require_once "include/header.php";
require_once "include/connection.php"; // Include your database connection

// Fetch all students
$query = "SELECT * FROM users WHERE role = 'student'";
$result = mysqli_query($conn, $query);
?>

<!-- Include Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="container mt-5">
    <h2 class="text-center">Manage Students</h2>

    <!-- Buttons to filter students by year -->
    <div class="text-center mb-4">
        <button class="btn btn-primary" onclick="filterStudents('all')">All Students</button>
        <button class="btn btn-success" onclick="filterStudents('1st')">1st Year</button>
        <button class="btn btn-info" onclick="filterStudents('2nd')">2nd Year</button>
        <button class="btn btn-warning" onclick="filterStudents('3rd')">3rd Year</button>
        <button class="btn btn-danger" onclick="filterStudents('4th')">4th Year</button>
    </div>

    <table id="studentTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Year</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Adjust the year display to ensure it matches the button labels
                    $yearDisplay = '';
                    switch ($row['year']) {
                        case '1':
                            $yearDisplay = '1st';
                            break;
                        case '2':
                            $yearDisplay = '2nd';
                            break;
                        case '3':
                            $yearDisplay = '3rd';
                            break;
                        case '4':
                            $yearDisplay = '4th';
                            break;
                        default:
                            $yearDisplay = 'Unknown';
                    }

                    // Ensure the row has the correct data-year attribute
                    echo "<tr data-year='{$yearDisplay}'>
                            <td>{$row['id']}</td>
                            <td>{$row['full_name']}</td> 
                            <td>{$row['email']}</td>
                            <td>{$yearDisplay}</td>
                            <td>
                                <a href='edit-student.php?id={$row['id']}' class='btn btn-warning btn-sm' title='Edit'>
                                    <i class='fas fa-edit'></i>
                                </a>
                                <a href='delete-student.php?id={$row['id']}' class='btn btn-danger btn-sm' title='Delete' onclick='return confirm(\"Are you sure you want to delete this student?\")'>
                                    <i class='fas fa-trash-alt'></i>
                                </a>
                                <a href='view-student.php?id={$row['id']}' class='btn btn-info btn-sm' title='View'>
                                    <i class='fas fa-eye'></i>
                                </a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5' class='text-center'>No students found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<script>
$(document).ready(function() {
    $('#studentTable').DataTable({
        "paging": true,
        "lengthMenu": [5, 10, 25, 50], // Page length options
        "language": {
            "search": "Filter students:",
            "lengthMenu": "Show _MENU_ students per page",
            "zeroRecords": "No matching students found",
            "info": "Showing _START_ to _END_ of _TOTAL_ students",
            "infoEmpty": "No students available",
            "infoFiltered": "(filtered from _MAX_ total students)"
        }
    });
});

// Function to filter students by year
function filterStudents(year) {
    $('#studentTable tbody tr').show(); // Show all students initially

    if (year !== 'all') {
        $('#studentTable tbody tr').each(function() {
            // Get the data-year attribute and check it against the year parameter
            const studentYear = $(this).data('year');
            console.log('Checking student year:', studentYear); // Debugging line
            if (studentYear !== year) {
                $(this).hide(); // Hide rows that don't match the selected year
            }
        });
    }
}
</script>

<?php
require_once "include/footer.php";
?>
