<?php
// Include database connection file
include 'connectDB.php';

// Check if the ID is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare and execute the delete query
    $sql = "DELETE FROM user WHERE idUser = ?";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, 's', $id);
    mysqli_stmt_execute($stmt);

    // Redirect to the user list page
    header('Location: users.php');
    exit;
} else {
    // Redirect to the user list page if no ID is set
    header('Location: users.php');
    exit;
}
?>
