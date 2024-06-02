<?php
// Include database connection file
include 'connectDB.php';
include 'cariUser.php';

$result = mysqli_query($koneksi, $sql);

// Check if there are any users
if (mysqli_num_rows($result) > 0) {
    $users = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
} else {
    $users = array();
}

// Handle delete user request
if (isset($_POST['delete_user'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM user WHERE idUser = '$id'";
    mysqli_query($koneksi, $sql);
    header('Location: users.php');
    exit;
}
?>

<?php include("adminHeader.php")?>
<main>
    <h1 style="color=white">User List</h1>
    <a class="add-btn" href="tambah_user.php">Add New User</a>
    <form method="GET" action="">
        <input type="search" name="search" placeholder="Search..." value="<?= htmlspecialchars($search_query) ?>">
        <button type="submit">Search</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="user-table">
            <?php foreach ($users as $user) {?>
                <tr>
                    <td><?= $user["idUser"]?></td>
                    <td><?= $user["usernameUser"]?></td>
                    <td><?= substr($user["passwordUser"], 0, 10) . '...' ?></td>
                    <td><?= $user["namaUser"]?></td>
                    <td><?= $user["emailUser"]?></td>
                    <td><?= $user["noUser"]?></td>
                    <td><?= $user["role"]?></td>
                    <td>
                        <a class="edit-btn" href="edit_user.php?id=<?= $user["idUser"] ?>">Edit</a>
                        <form method="POST" action="" style="display:inline-block;">
                            <input type="hidden" name="id" value="<?= $user["idUser"]?>">
                            <button class="delete-btn" type="submit" name="delete_user">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</main>
<?php include("adminFooter.php")?>
