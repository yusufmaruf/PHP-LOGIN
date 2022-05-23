<?php
//deklarasi server, ussername, pw dan database
$servername = "localhost";
$username= "root";
$password = "";
$dbname = "db_kontak";
//membuat tabel
//membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
//cek koneksi
if(!$conn){
    die("connection failed : " . mysqli_connect_error()); //msg eror

}
//pembuatan tabel
$querysql = "CREATE TABLE kontak(
    id INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama  VARCHAR(30) NOT NULL,
    jkel  VARCHAR(10),
    email  VARCHAR(30),
    alamat VARCHAR(50),
    kota VARCHAR(20),
    pesan text)";
//penmgecekan
if(mysqli_query($conn, $querysql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn)
?>