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
<style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        main {
            max-width: 500px;
            margin: 10px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
        }

        h1 {
            text-align: center; 
            color: #333;
            font-weight: 600;
        }

        form.addTourGuide {
            display: flex;
            flex-direction: column;
        }

        form.addTourGuide label {
            margin-top: 15px;
            font-weight: 600;
            color: #555;
        }

        form.addTourGuide input,
        form.addTourGuide select,
        form.addTourGuide button {
            margin-top: 5px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
        }

        form.addTourGuide input[type="number"]::-webkit-outer-spin-button,
        form.addTourGuide input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none; /* Remove number input arrows for Webkit */
            margin: 0;
        }

        form.addTourGuide input[type="number"] {
            -moz-appearance: textfield; /* Remove number input arrows for Firefox */
            appearance: textfield; /* Standard property to remove number input arrows */
        }

        form.addTourGuide button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 20px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        form.addTourGuide button:hover {
            background-color: #0056b3;
        }
    </style>
<main>
    <h1>Edit User</h1>
    <?php if ($user) { ?>
        <form method="POST" action="" class="addTourGuide">
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
