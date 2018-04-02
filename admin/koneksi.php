<?php
	$namahost = "localhost";
	$user= "root";
	$password= "";
	$nama_db= "dinsos";
	$koneksi= mysqli_connect($namahost,$user,$password,$nama_db);

if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
?>