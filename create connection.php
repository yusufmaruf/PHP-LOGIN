<?php
$koneksi = mysqli_connect("localhost", "root", "");

if(!$koneksi){
    die("connection failed : " . mysqli_connect_error()); //msg eror
}

?>