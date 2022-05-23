<?php
include "koneksi.php";
$sql = "Select * from kontak order by nama;";
$qry = mysqli_query($conn, $sql) or die ("proses cetak gagal");
echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
    <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Kota</th>
    <th>Pesan</th>
    ";
$no=1;
foreach ($qry as $row) { // Melakukan perulangan pada data kontak
    echo "<tr>
        <td>$no</td> 
        <td>".$row['nama']."</td>
        <td>".$row['jkel']."</td>
        <td>".$row['email']."</td>
        <td>".$row['alamat']."</td>
        <td>".$row['kota']."</td>
        <td>".$row['pesan']."</td>
            </tr>";
    $no++;
}
echo "</table>";

?>
<a href="../form.php">Kembali</a>