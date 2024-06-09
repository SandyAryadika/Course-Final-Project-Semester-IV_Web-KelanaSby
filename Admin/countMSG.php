<?php 
include "connectDB.php";

$sql_MSG = "SELECT COUNT(*) as total_MSG FROM messageuser";
$result_MSG = mysqli_query($koneksi, $sql_MSG);
$total_MSG = mysqli_fetch_assoc($result_MSG)['total_MSG'];
?>