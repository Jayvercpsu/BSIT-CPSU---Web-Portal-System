<?php
require_once "include/header.php";
require_once "include/connection.php"; // Include your database connection

// Fetch only professors
$query = "SELECT * FROM users WHERE role = 'professor'";
$result = mysqli_query($conn, $query);
?>
<!-- Include Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 

<div class="container mt-5">
    <h2 class="text-center">Manage Professors</h2>
    <table id="professorTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['full_name']}</td> 
                            <td>{$row['email']}</td>
                            <td>
                                <a href='edit-professor.php?id={$row['id']}' class='btn btn-warning btn-sm' title='Edit'>
                                    <i class='fas fa-edit'></i>
                                </a>
                                <a href='delete-professor.php?id={$row['id']}' class='btn btn-danger btn-sm' title='Delete' onclick='return confirm(\"Are you sure you want to delete this professor?\")'>
                                    <i class='fas fa-trash-alt'></i>
                                </a>
                                <a href='view-professor.php?id={$row['id']}' class='btn btn-info btn-sm' title='View'>
                                    <i class='fas fa-eye'></i>
                                </a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4' class='text-center'>No professors found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<script>
$(document).ready(function() {
    $('#professorTable').DataTable({
        "paging": true,
        "lengthMenu": [5, 10, 25, 50], // Page length options
        "language": {
            "search": "Filter professors:",
            "lengthMenu": "Show _MENU_ professors per page",
            "zeroRecords": "No matching professors found",
            "info": "Showing _START_ to _END_ of _TOTAL_ professors",
            "infoEmpty": "No professors available",
            "infoFiltered": "(filtered from _MAX_ total professors)"
        }
    });
});
</script>

<?php
require_once "include/footer.php";
?>
