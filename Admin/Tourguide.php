<?php 
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header("Location: ../user/loginRegist.php");
    exit();
}
?>

<?php
// Include database connection file
include 'connectDB.php';

// Handle delete tour guide request
if (isset($_POST['delete_tourguide'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM tourguide WHERE idTourGuide = '$id'";
    mysqli_query($koneksi, $sql);
    header('Location: tourguide.php');
    exit();
}

// Set the number of tour guides to display per page
$tourguides_per_page = 10;

// Get the current page number from the URL, default to 1 if not set
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($current_page < 1) $current_page = 1;

// Handle search query
$search_query = isset($_GET['search']) ? mysqli_real_escape_string($koneksi, $_GET['search']) : '';

// Calculate the offset for the SQL query
$offset = ($current_page - 1) * $tourguides_per_page;

// Get the total number of tour guides with or without search query
if (!empty($search_query)) {
    $total_tourguides_query = "SELECT COUNT(*) as total FROM tourguide 
                               WHERE idTourGuide LIKE '%$search_query%' 
                               OR name LIKE '%$search_query%' 
                               OR gender LIKE '%$search_query%' 
                               OR age LIKE '%$search_query%' 
                               OR experience LIKE '%$search_query%' 
                               OR language LIKE '%$search_query%' 
                               OR rating LIKE '%$search_query%' 
                               OR price LIKE '%$search_query%'";
} else {
    $total_tourguides_query = "SELECT COUNT(*) as total FROM tourguide";
}
$total_tourguides_result = mysqli_query($koneksi, $total_tourguides_query);
$total_tourguides_row = mysqli_fetch_assoc($total_tourguides_result);
$total_tourguides = $total_tourguides_row['total'];

// Calculate the total number of pages
$total_pages = ceil($total_tourguides / $tourguides_per_page);

// Fetch tour guides for the current page with or without search query
if (!empty($search_query)) {
    $sql = "SELECT * FROM tourguide 
            WHERE idTourGuide LIKE '%$search_query%' 
            OR name LIKE '%$search_query%' 
            OR gender LIKE '%$search_query%' 
            OR age LIKE '%$search_query%' 
            OR experience LIKE '%$search_query%' 
            OR language LIKE '%$search_query%' 
            OR rating LIKE '%$search_query%' 
            OR price LIKE '%$search_query%' 
            LIMIT $offset, $tourguides_per_page";
} else {
    $sql = "SELECT * FROM tourguide LIMIT $offset, $tourguides_per_page";
}
$result = mysqli_query($koneksi, $sql);

// Check if there are any tour guides
$tourguides = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $tourguides[] = $row;
    }
}

mysqli_close($koneksi);
?>

<?php include("adminHeader.php")?>
<main>
    <h1>Tour Guide List</h1>
    <a class="add-btn" href="tambah_tourguide.php">Add New Tour Guide</a>
    <form method="GET" action="" class="searchBar">
        <input type="search" name="search" placeholder="Search..." value="<?= htmlspecialchars($search_query) ?>">
        <button type="submit">Search</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Experience (Years)</th>
                <th>Language</th>
                <th>Rating</th>
                <th>Price (per day)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="tourguide-table">
            <?php foreach ($tourguides as $tourguide) {?>
                <tr>
                    <td><?= htmlspecialchars($tourguide["idTourGuide"])?></td>
                    <td><?= htmlspecialchars($tourguide["name"])?></td>
                    <td><?= htmlspecialchars($tourguide["gender"])?></td>
                    <td><?= htmlspecialchars($tourguide["age"])?></td>
                    <td><?= htmlspecialchars($tourguide["experience"])?></td>
                    <td><?= htmlspecialchars($tourguide["language"])?></td>
                    <td><?= htmlspecialchars($tourguide["rating"])?></td>
                    <td><?= htmlspecialchars($tourguide["price"])?></td>
                    <td>
                        <a class="edit-btn" href="edit_tourguide.php?id=<?= htmlspecialchars($tourguide["idTourGuide"]) ?>">Edit</a>
                        <form method="POST" action="" style="display:inline-block;">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($tourguide["idTourGuide"])?>">
                            <button class="delete-btn" type="submit" name="delete_tourguide">Delete</button>
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
