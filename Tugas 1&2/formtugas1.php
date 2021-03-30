<!DOCTYPE html>
<html>
<head>
    <title>Form Login Tugas 1</title>
    <style type="text/css">
       form{
        margin: 10px;
        padding: 10px;
        border-color: black;
        border-style: solid;
        font-family: fantasy;
        font-size: 20px;
        max-width: 250px
       } 
    </style>
</head>
<body>
    <!-- Form untuk mendapatkan input yang akan ditampilkan di file lain -->
    <form method="POST" action="tampilan.php">
        <p>NAMA: <input type="text" name="nama" placeholder="masukkan nama anda"></p>
        <p>EMAIL: <input type="text" name="email" placeholder="masukkan email anda"></p>
        <!--button untuk submit-->
        <button type="submit" value="submit">submit</button>
    </form>
</body>
</html>