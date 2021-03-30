<?php 
// Menampilkan teks
echo "<h1>Biodata Saya</h1>";
echo "Nama : ".$_POST['nama']."<br>";
echo "Tanggal Lahir : ".$_POST['tgllahir']."<br>";
echo "Jenis Kelamin : ".$_POST['k']."<br>";
echo "Alamat : ".$_POST['alamat']."<br>";
echo "Nomor Telpon : ".$_POST['telpon']."<br>";
echo "Anda mengisi biodata ini pada : ".date("d-F-Y");
?>