<?php
include "admin/koneksi.php";
$vnama=$_POST['nama'];
$vjkel=$_POST['jkelamin'];
$vemail=$_POST['mail'];
$valamat=$_POST['alamat'];
$vkota=$_POST['kota'];
$vpesan=$_POST['pesan'];

$sql="insert kontak set nama='$vnama',
        jkel='$vjkel',
        email='$vemail',
        alamat='$valamat',
        kota='$vkota',
        pesan='$vpesan'";

mysqli_query($koneksi, $sql) or die("Proses simpan ke database gagal");
mysqli_close($koneksi);
header("location:form.php");

?>