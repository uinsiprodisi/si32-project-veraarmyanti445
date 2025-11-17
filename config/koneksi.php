<?php

$servername = "localhost";
$database = "uinsi_2441919017";
$username = "root";
$password = "";

//Buat Koneksi Database
$conn = mysqli_connect($servername,$username,$password,$database);

//Cek Koneksi

if (!$conn) {
    die("Koneksi Gagal".mysqli_connect_eror());
}

?>