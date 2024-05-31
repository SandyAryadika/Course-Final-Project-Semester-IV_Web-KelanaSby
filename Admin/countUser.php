<?php 
include "connectDB.php";
$sql_users = "SELECT COUNT(*) as total_users FROM user";
$result_users = mysqli_query($koneksi, $sql_users);
$total_users = mysqli_fetch_assoc($result_users)['total_users'];
?>