<?php
$host = "localhost";
$username="root";
$password="";
$db = "db_kontak";
$conn = mysqli_connect($host, $username, $password) or die("Koneksi gagal dibangun");
$conndb = mysqli_select_db($conn, "db_kontak") or die("Koneksi gagal dibangun");
$koneksi = mysqli_connect($host, $username, $password, $db)or die("Koneksi gagal dibangun");
?>