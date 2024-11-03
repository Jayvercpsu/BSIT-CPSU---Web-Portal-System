<?php
require_once "include/header.php";
require_once "include/connection.php"; // Include your database connection

// Fetch only professors
$query = "SELECT * FROM users WHERE role = 'professor'";
$result = mysqli_query($conn, $query);
?>

<div class="container mt-5">
    <h2 class="text-center">Manage Professors</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th> <!-- Change the header to Full Name -->
                <th>Email</th>
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
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='3' class='text-center'>No professors found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
require_once "include/footer.php";
?>