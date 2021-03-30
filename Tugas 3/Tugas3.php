<!DOCTYPE html>
<html>
<head>
	<title>Tugas 3 Form Biodata</title>
	<style type="text/css">
		h1{
			font-size: 40px;
			font-family:fantasy;
			font-style: italic;
		  	-webkit-text-stroke: 1px black;
		   	color: white;
		   	text-shadow:
		    3px 3px 0 #000,
		    -1px -1px 0 #000,  
		    1px -1px 0 #000,
		    1px 1px 0 #000,
		    1px 1px 0 #000; 
		    border-style: solid;
		    border-color: black;
		    background-color: red;  
		    margin: 10px;
	        padding: 10px; 
	        max-width: 250px;   
		}
		form{
			margin: 10px;
	        padding: 10px;
	        border-color: black;
	        border-style: solid;
	        font-family: fantasy;
	        font-size: 20px;
	        max-width: 250px;
        
		}
		input{

		}
	</style>
</head>
<body>
	<h1>Biodata</h1>
	<!-- Form untuk mendapat input yang akan ditampilkan di file lain -->
	<form method="POST" action="tampilanTugas3.php">
		<p>Silahkan isi biodata anda</p>
		<p>Nama : </p>
		<input type="text" name="nama">
		<p>Tangga lahir : </p>
		<input type="date" id="tgllahir" name="tgllahir">
		<p>Jenis Kelamin : 
		<br>
		<input type="radio" name="k" value="Laki - Laki"> Laki - laki
        <br>
        <input type="radio" name="k" value="Perempuan"> Perempuan</p>
		<p>Alamat : </p>
		<input type="text" name="alamat">
		<p>Nomor Telepon : </p>
		<input type="text" name="telpon">
		<br>
		<!-- Button untuk mensubmit-->
        <input type="submit" name="login" value="Submit">
                    
	</form>
</body>
</html>