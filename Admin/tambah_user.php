<?php
// Include database connection file
include 'connectDB.php';

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
    }
    return $userId;
}

// Handle add user request
if (isset($_POST['add_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Generate a unique user ID
    $userId = generateUserId($koneksi);

    // Hash the password before storing
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (idUser, usernameUser, passwordUser, namaUser, emailUser, noUser) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, 'ssssss', $userId, $username, $hashedPassword, $name, $email, $phone);
    mysqli_stmt_execute($stmt);

    // Redirect to the user list page
    header('Location: users.php');
    exit;
}
?>

<!-- HTML code for add user form -->
<?php include("adminHeader.php")?>
<main>
    <h1>Add New User</h1>
    <form method="POST" action="">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        
        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" required>
        
        <button class="add-btn" type="submit" name="add_user">Add User</button>
    </form>
</main>
<?php include("adminFooter.php") ?>