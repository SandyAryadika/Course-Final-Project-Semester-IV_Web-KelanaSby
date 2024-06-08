<?php
// Include database connection file
include '../Admin/connectDB.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $name = mysqli_real_escape_string($koneksi, $_POST['name']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $message = mysqli_real_escape_string($koneksi, $_POST['message']);

    $created_at = date('Y-m-d H:i:s');
    $sql = "INSERT INTO messageuser (name, email, message, created_at) VALUES ('$name', '$email', '$message', '$created_at')";


    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Message sent successfully!'); window.location.href = 'home.php';</script>";
    } else {
        echo "<script>alert('Error sending message: " . mysqli_error($koneksi) . "'); window.history.back();</script>";
    }

    // Tutup koneksi database
    mysqli_close($koneksi);
} else {
    echo "<script>alert('Invalid request method'); window.history.back();</script>";
}
?>
