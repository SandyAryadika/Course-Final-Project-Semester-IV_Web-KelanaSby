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
    <h1>Add New User</h1>
    <form method="POST" action="" class="addTourGuide">
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