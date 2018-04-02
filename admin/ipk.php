<?php
include('koneksi.php');
require ('fpdf/fpdf.php');
include('kalender1.php');
$tanggal_dari1 = $_POST['dari_tanggal1'];
$tanggal_sampai1 = $_POST['sampai_tanggal1'];
$tgl=''.tglindo1("$tanggal_dari1").'';
$tgl1=''.tglindo1("$tanggal_sampai1").'';

$cetak = "SELECT * FROM pelanggan join agama on pelanggan.agama=agama.id join gaji on pelanggan.gaji=gaji.id join jenis_kelamin on pelanggan.jk=jenis_kelamin.id join pendidikan on pelanggan.pend=pendidikan.id join status on pelanggan.status=status.id join lokasi on pelanggan.lokasi=lokasi.id;
$run=mysqli_query($koneksi,$cetak);
$data=mysqli_fetch_array($run);

class PDF extends fpdf
{
	//page header
	function Header()
	{
		$this->SetFont('Arial','B',20);
		$this->Cell(60);
	}
}
$pdf=new PDF('P','in',array(8.27,11.69));
$pdf->AddPage('P');
$pdf->Output();
?>


