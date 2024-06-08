<?php 
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header("Location: ../user/loginRegist.php");
    exit();
}

// Include database connection file
include 'connectDB.php';

// Handle delete user request
if (isset($_POST['delete_user'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM user WHERE idUser = '$id'";
    mysqli_query($koneksi, $sql);
    header('Location: users.php');
    exit();
}

// Set the number of users to display per page
$users_per_page = 10;

// Get the current page number from the URL, default to 1 if not set
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($current_page < 1) $current_page = 1;

// Handle search query
$search_query = isset($_GET['search']) ? mysqli_real_escape_string($koneksi, $_GET['search']) : '';

// Calculate the offset for the SQL query
$offset = ($current_page - 1) * $users_per_page;

// Get the total number of users with or without search query
if (!empty($search_query)) {
    $total_users_query = "SELECT COUNT(*) as total FROM user 
                          WHERE idUser LIKE '%$search_query%' 
                          OR usernameUser LIKE '%$search_query%' 
                          OR namaUser LIKE '%$search_query%' 
                          OR emailUser LIKE '%$search_query%' 
                          OR noUser LIKE '%$search_query%'";
} else {
    $total_users_query = "SELECT COUNT(*) as total FROM user";
}
$total_users_result = mysqli_query($koneksi, $total_users_query);
$total_users_row = mysqli_fetch_assoc($total_users_result);
$total_users = $total_users_row['total'];

// Calculate the total number of pages
$total_pages = ceil($total_users / $users_per_page);

// Fetch users for the current page with or without search query
if (!empty($search_query)) {
    $sql = "SELECT * FROM user 
            WHERE idUser LIKE '%$search_query%' 
            OR usernameUser LIKE '%$search_query%' 
            OR namaUser LIKE '%$search_query%' 
            OR emailUser LIKE '%$search_query%' 
            OR noUser LIKE '%$search_query%' 
            LIMIT $offset, $users_per_page";
} else {
    $sql = "SELECT * FROM user LIMIT $offset, $users_per_page";
}
$result = mysqli_query($koneksi, $sql);

// Check if there are any users
$users = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}

mysqli_close($koneksi);
?>

<?php include("adminHeader.php")?>
<main>
    <h1>User List</h1>
    <a class="add-btn" href="tambah_user.php">Add New User</a>
    <form method="GET" action="" class="searchBar">
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
                    <td><?= htmlspecialchars($user["idUser"])?></td>
                    <td><?= htmlspecialchars($user["usernameUser"])?></td>
                    <td><?= htmlspecialchars(substr($user["passwordUser"], 0, 10) . '...') ?></td>
                    <td><?= htmlspecialchars($user["namaUser"])?></td>
                    <td><?= htmlspecialchars($user["emailUser"])?></td>
                    <td><?= htmlspecialchars($user["noUser"])?></td>
                    <td><?= htmlspecialchars($user["role"])?></td>
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
    
    <!-- Pagination Links -->
    <div class="pagination">
        <?php if ($current_page > 1): ?>
            <a href="?page=<?= $current_page - 1 ?>&search=<?= urlencode($search_query) ?>">Prev</a>
        <?php endif; ?>
        
        <?php for ($page = 1; $page <= $total_pages; $page++): ?>
            <a href="?page=<?= $page ?>&search=<?= urlencode($search_query) ?>" <?= ($page == $current_page) ? 'class="active"' : '' ?>><?= $page ?></a>
        <?php endfor; ?>
        
        <?php if ($current_page < $total_pages): ?>
            <a href="?page=<?= $current_page + 1 ?>&search=<?= urlencode($search_query) ?>">Next</a>
        <?php endif; ?>
    </div>
</main>
<?php include("adminFooter.php")?>
