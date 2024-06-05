<?php
include '../Admin/connectDB.php';

// Function to generate a unique ID
function generateUserId($conn) {
    $idExists = true;
    while ($idExists) {
        $randomNumber = str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT); // Generate a random number with 3 digits
        $userId = "USR" . $randomNumber;

        // Check if this ID already exists in the database
        $sql = "SELECT idUser FROM user WHERE idUser = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 's', $userId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 0) {
            $idExists = false; // If no existing ID is found, exit the loop
        }
        mysqli_stmt_close($stmt); // Don't forget to close the statement
    }
    return $userId;
}

// Handle add user request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $name = mysqli_real_escape_string($koneksi, $_POST['name']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $phone = mysqli_real_escape_string($koneksi, $_POST['phone']);

    // Generate a unique user ID
    $userId = generateUserId($koneksi);

    // Hash the password before storing it
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (idUser, usernameUser, passwordUser, namaUser, emailUser, noUser) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, 'ssssss', $userId, $username, $hashed_password, $name, $email, $phone);

    if (mysqli_stmt_execute($stmt)) {
        // Redirect to the login page after successful registration
        header("Location: loginRegist.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($koneksi);
}
?>
