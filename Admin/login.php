<?php
session_start();
include("connectDB.php"); // Pastikan file ini ada dan mendefinisikan $conn

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Amankan input dengan real_escape_string untuk mencegah SQL injection
    $username = $koneksi->real_escape_string($username);

    $sql = "SELECT * FROM user WHERE usernameUser = '$username'";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Debug: Print fetched password hash
        echo "Fetched hashed password: " . $row['passwordUser'] . "<br>";

        if (password_verify($password, $row['passwordUser'])) {
            $_SESSION['user_id'] = $row['idUser'];
            $_SESSION['role'] = $row['role'];

            // Debug: Print role
            echo "User role: " . $row['role'] . "<br>";

            if ($row['role'] == 'admin') {
                header("Location: dashboard.php");
            } else {
                header("Location: ../user/home.php"); // Halaman utama untuk user biasa
            }
            exit();
        } else {
            $error = "Invalid password";
        }
    } else {
        $error = "Invalid username";
    }
    mysqli_close($koneksi);
}
?>
