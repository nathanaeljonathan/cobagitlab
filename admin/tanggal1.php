<!DOCTYPE html>
<html lang="en">
<?php
include 'koneksi.php';
if(isset($_POST["submit"])){
$tanggal_dari1 = $_POST['dari_tanggal1'];
$tanggal_sampai1 = $_POST['sampai_tanggal1'];
}
?>
<head>
<title>DINAS SOSIAL TENAGA KERJA DAN TRANSMIGRASI KABUPATEN PURBALINGGA</title>
Laporan IPK
</head>
<body>
<form action="ipk.php" method="post">
	<br>Dari Tanggal       
	<input type="date" name="dari_tanggal1" required><br>
	Sampai Tanggal          
	<input type="date" name="sampai_tanggal1" required><br>		
	<input type="submit" name="submit" >
	</form>
</body>
