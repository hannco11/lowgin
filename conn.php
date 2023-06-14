<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "hann";

$koneksi = mysqli_connect($host, $user, $password, $database);
if(!$koneksi){
    echo "koneksi gagal";
}
?>