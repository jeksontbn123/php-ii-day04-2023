<?php

 # echo "proses tambah...";

 /*membuat variabel baru
 dari data yang dikirimkan pada from
 */

$nama_belakang = $_GET['nama_lengkap'];
$alamat_email = $_GET['alamat_email'];

// menambilkan nama lengkap
echo "<b>nama-lengkap </b> : <br>";
echo $nama_belakang;
echo "<br><br>";

//menambilkan alamat email
echo "<b>alamat Email</b> : <br>";
echo $alamat_email;