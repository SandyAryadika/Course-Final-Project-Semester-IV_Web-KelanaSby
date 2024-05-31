<?php 
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "admin_kelana";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if(!$koneksi){
    die("Koneksi Gagal : ".mysqli_connect_error());
}
else{
    // echo "Koneksi Berhasil";
}
?>