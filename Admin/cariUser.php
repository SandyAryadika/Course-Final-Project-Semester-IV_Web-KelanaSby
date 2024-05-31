<?php 
// Handle search request
$search_query = '';
if (isset($_GET['search'])) {
    $search_query = mysqli_real_escape_string($koneksi, $_GET['search']);
    $sql = "SELECT * FROM user WHERE idUser LIKE '%$search_query%' OR usernameUser LIKE '%$search_query%' OR namaUser LIKE '%$search_query%' OR emailUser LIKE '%$search_query%' OR noUser LIKE '%$search_query%'";
} else {
    // Get all users from database
    $sql = "SELECT * FROM user";
}
?>