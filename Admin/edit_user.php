<?php 
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}
?>

<?php
// Include database connection file
include 'connectDB.php';

// Get user data based on ID
$user = null;
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM user WHERE idUser = ?";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, 's', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);
}

// Handle edit user request
if (isset($_POST['edit_user'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Hash the password before storing
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "UPDATE user SET usernameUser = ?, passwordUser = ?, namaUser = ?, emailUser = ?, noUser = ? WHERE idUser = ?";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, 'ssssss', $username, $hashedPassword, $name, $email, $phone, $id);
    mysqli_stmt_execute($stmt);

    // Redirect to the user list page
    header('Location: users.php');
    exit;
}
?>

<?php include("adminHeader.php") ?>
<main>
    <h1>Edit User</h1>
    <?php if ($user) { ?>
        <form method="POST" action="">
            <input id="edit-id" name="id" type="hidden" value="<?= $user['idUser'] ?>">

            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="<?= $user['usernameUser'] ?>" required>

            <label for="password">Password</label>
            <input type="text" id="password" name="password" value="<?= $user['passwordUser'] ?>" required>

            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="<?= $user['namaUser'] ?>" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?= $user['emailUser'] ?>" required>

            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" value="<?= $user['noUser'] ?>" required>

            <button type="submit" name="edit_user">Save Changes</button>
        </form>
    <?php } else { ?>
        <p>User not found.</p>
    <?php } ?>
</main>
<?php include("adminFooter.php") ?>
