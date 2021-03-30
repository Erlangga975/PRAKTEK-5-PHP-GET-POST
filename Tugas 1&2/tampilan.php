<?php 
	// Menyeleksi inputan
	if (empty($_POST['nama'] && $_POST['email'])) {
		header("location:Tugas2.php");
	} 
	else {
		echo "NAMA : ".$_POST['nama']." <br>";
		echo "EMAIL : ".$_POST['email']." <br>";	
		echo "Waktu Login Anda :".date("d-F-Y")."<br>";
	}
 ?>