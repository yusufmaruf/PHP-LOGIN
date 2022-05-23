<?php
    // mengaktifkan session pada php 
    session_start();
    //mengkoneksiakn koneksi dengan database
    $con = mysqli_connect("localhost","root","","db_kontak");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    //mengambil data dari form dan menampung ke variabel penampung
    $username = $_POST['username'];
    $password = $_POST['pw'];
    //memvalidasi data dari user dengan data di dbs
    $sql = "SELECT * FROM admin where ussername='$username' and password='$password'";
    $result = mysqli_query($con, $sql);
    $rowcount=mysqli_num_rows($result);
   
    // menampung hasil pengecekan dan menghitung jumlah baris 
    //validasi
    if($rowcount > 0){
    // Menyimpan session username dan password
    $_SESSION['username'] = $username;
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['status'] = "sudah_login";
    $_SESSION['id_login'] = $data['id'];
    header("location:cetakadmin.php");
    }else { header("location:indexlogin.php?pesan= Gagal login data tidak ditemukan !");}



?>