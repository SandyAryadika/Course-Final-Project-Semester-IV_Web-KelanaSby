<?php 
include "connectDB.php";

// Query to count the total number of tour guides
$sql_TG = "SELECT COUNT(*) as total_TG FROM tourguide";
$result_TG = mysqli_query($koneksi, $sql_TG);

// Fetch the result and access the correct array key
$total_TG = mysqli_fetch_assoc($result_TG)['total_TG'];
?>
