<?php 
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header("Location: ../user/loginRegist.php");
    exit();
}
?>

<?php
include 'connectDB.php'; // Include file koneksi database

// Handle search query
$search_query = isset($_GET['search']) ? mysqli_real_escape_string($koneksi, $_GET['search']) : '';

// Ambil data dari tabel kontak dengan pencarian
$sql = "SELECT * FROM messageUser WHERE name LIKE '%$search_query%' OR email LIKE '%$search_query%' OR message LIKE '%$search_query%' LIMIT 10";
$result = mysqli_query($koneksi, $sql);

if (!$result) {
    die('Query Error: ' . mysqli_error($koneksi));
}

// Simpan hasil query dalam array
$messageUser = [];
while ($row = mysqli_fetch_assoc($result)) {
    $messageUser[] = $row;
}

mysqli_close($koneksi);
?>

<?php include("adminHeader.php")?>
    <main>
        <h1>Contact Messages</h1>
        <form method="GET" action="">
            <input type="search" name="search" placeholder="Search..." value="<?= htmlspecialchars($search_query) ?>">
            <button type="submit">Search</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($messageUser as $messages): ?>
                    <tr>
                        <td><?= htmlspecialchars($messages["name"]) ?></td>
                        <td><?= htmlspecialchars($messages["email"]) ?></td>
                        <td><?= htmlspecialchars($messages["message"]) ?></td>
                        <td><?= htmlspecialchars($messages["created_at"]) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
    <?php include("adminFooter.php")?>