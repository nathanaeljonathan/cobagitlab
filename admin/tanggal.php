<!DOCTYPE html>
<html lang="en">
<?php
include 'koneksi.php';
if(isset($_POST["submit"])){
$tanggal_dari = $_POST['dari_tanggal'];
$tanggal_sampai = $_POST['sampai_tanggal'];
}
?>
<head>
<title>DINAS SOSIAL TENAGA KERJA DAN TRANSMIGRASI KABUPATEN PURBALINGGA</title>
Laporan IPK
</head>
<body>
<form action="laporantahun.php" method="post">
	<br>Dari Tanggal       
	<input type="date" name="dari_tanggal" required><br>
	Sampai Tanggal          
	<input type="date" name="sampai_tanggal" required><br>		
	<input type="submit" name="submit" >
	</form>
</body>
