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
                header("Location: userHomePage.php"); // Halaman utama untuk user biasa
            }
            exit();
        } else {
            $error = "Invalid password";

            // Debug: Print invalid password message
            echo "Password verification failed.<br>";
        }
    } else {
        $error = "Invalid username";

        // Debug: Print invalid username message
        echo "Username not found.<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="admin-style.css">
</head>
<body>
    <div class="login-form">
        <h2>Login</h2>
        <form method="POST" action="">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
    </div>
</body>
</html>
