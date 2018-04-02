<?php
include('koneksi.php');
require ('fpdf/fpdf.php');

$query = mysqli_query($koneksi, "select * from pelanggan") or die(mysqli_error($koneksi));
$data = array();
$i = 0;
while($row = mysqli_fetch_array($query)){
    $data[$i] = $row;
    $i++;
}


$jumlahSDLaki = 0;
$jumlahSDPer = 0;
$jumlahSMPLaki = 0;
$jumlahSMPPer = 0;
$jumlahMTSLaki = 0;
$jumlahMTSPer = 0;
$jumlahSMALaki = 0;
$jumlahSMAPer = 0;
$jumlahMALaki = 0;
$jumlahMAPer = 0;
$jumlahSMKLaki = 0;
$jumlahSMKPer = 0;
$jumlahD1Laki = 0;
$jumlahD1Per = 0;
$jumlahD2Laki = 0;
$jumlahD2Per = 0;
$jumlahD3Laki = 0;
$jumlahD3Per = 0;
$jumlahD4Laki = 0;
$jumlahD4Per = 0;
$jumlahS1Laki = 0;
$jumlahS1Per = 0;
$jumlahS2Laki = 0;
$jumlahS2Per = 0;
$jumlahProfLaki = 0;
$jumlahProfPer = 0;
$jumsd=0;
$jumsmp=0;
$jummts=0;
$jumsma=0;
$jumma=0;
$jumsmk=0;
$jumd1=0;
$jumd2=0;
$jumd3=0;
$jumd4=0;
$jums1=0;
$jums2=0;
$jumprof=0;
$jumpendL=0;
$jumpendP=0;
$totalpend=0;
foreach ($data as $i => $d) {
	$pend = $d['pend'];
	$gender = $d['jk'];
	if ($pend == 'SD') {
		if ($gender == "LAKI-LAKI") {
			$jumlahSDLaki++;
		} else if ($gender == "PEREMPUAN") {
			$jumlahSDPer++;
		}
		$jumsd=$jumlahSDLaki+$jumlahSDPer;
	}
	if ($pend == 'SMP') {
		if ($gender == "LAKI-LAKI") {
			$jumlahSMPLaki++;
		} else if ($gender == "PEREMPUAN") {
			$jumlahSMPPer++;
		}
		$jumsmp=$jumlahSMPPer+$jumlahSMPLaki;
	}
	if ($pend == 'MTS') {
		if ($gender == "LAKI-LAKI") {
			$jumlahMTSLaki++;
		} else if ($gender == "PEREMPUAN") {
			$jumlahMTSPer++;
		}
		$jummts=$jumlahMTSLaki+$jumlahMTSPer;
	}
	if ($pend == 'SMA') {
		if ($gender == "LAKI-LAKI") {
			$jumlahSMALaki++;
		} else if ($gender == "PEREMPUAN") {
			$jumlahSMAPer++;
		}
		$jumsma=$jumlahSMALaki+$jumlahSMAPer;
	}
	if ($pend == 'MA') {
		if ($gender == "LAKI-LAKI") {
			$jumlahMALaki++;
		} else if ($gender == "PEREMPUAN") {
			$jumlahMAPer++;
		}
		$jumma=$jumlahMAPer+$jumlahMALaki;
	}
	if ($pend == 'SMK') {
		if ($gender == "LAKI-LAKI") {
			$jumlahSMKLaki++;
		} else if ($gender == "PEREMPUAN") {
			$jumlahSMKPer++;
		}
		$jumsmk=$jumlahSMKPer+$jumlahSMKLaki;
	}
	if ($pend == 'D-1') {
		if ($gender == "LAKI-LAKI") {
			$jumlahD1Laki++;
		} else if ($gender == "PEREMPUAN") {
			$jumlahD1Per++;
		}
		$jumd1=$jumlahD1Per+$jumlahD1Laki;
	}
	if ($pend == 'D-2') {
		if ($gender == "LAKI-LAKI") {
			$jumlahD2Laki++;
		} else if ($gender == "PEREMPUAN") {
			$jumlahD2Per++;
		}
		$jumd2=$jumlahD2Per+$jumlahD2Laki;
	}
	if ($pend == 'D-3') {
		if ($gender == "LAKI-LAKI") {
			$jumlahD3Laki++;
		} else if ($gender == "PEREMPUAN") {
			$jumlahD3Per++;
		}
		$jumd3=$jumlahD3Per+$jumlahD3Laki;
	}
	if ($pend == 'D-4') {
		if ($gender == "LAKI-LAKI") {
			$jumlahD4Laki++;
		} else if ($gender == "PEREMPUAN") {
			$jumlahD4Per++;
		}
		$jumd4=$jumlahD4Per+$jumlahD4Laki;
	}
	if ($pend == 'S-1') {
		if ($gender == "LAKI-LAKI") {
			$jumlahS1Laki++;
		} else if ($gender == "PEREMPUAN") {
			$jumlahS1Per++;
		}
		$jums1=$jumlahS1Per+$jumlahS1Laki;
	}
	if ($pend == 'S-2') {
		if ($gender == "LAKI-LAKI") {
			$jumlahS2Laki++;
		} else if ($gender == "PEREMPUAN") {
			$jumlahS2Per++;
		}
		$jums2=$jumlahS2Per+$jumlahS2Laki;
	}
	if ($pend == 'PROFESI') {
		if ($gender == "LAKI-LAKI") {
			$jumlahProfLaki++;
		} else if ($gender == "PEREMPUAN") {
			$jumlahProfPer++;
		}
		$jumprof=$jumlahProfPer+$jumlahProfLaki;
	}
	$jumpendL=$jumlahSDLaki+$jumlahSMPLaki+$jumlahSMALaki+$jumlahMALaki+$jumlahSMKLaki+$jumlahD1Laki+$jumlahD2Laki+$jumlahD3Laki+$jumlahS1Laki+$jumlahS2Laki+$jumlahD4Laki+$jumlahProfLaki;
	$jumpendP=$jumlahSDPer+$jumlahSMPPer+$jumlahSMAPer+$jumlahMAPer+$jumlahSMKPer+$jumlahD1Per+$jumlahD2Per+$jumlahD3Per+$jumlahS1Per+$jumlahS2Per+$jumlahD4Per+$jumlahProfPer;
	$totalpend=$jumpendP+$jumpendL;
}
	$age15L=0;
	$age20L=0;
	$age30L=0;
	$age45L=0;
	$age55L=0;
	$age15P=0;
	$age20P=0;
	$age30P=0;
	$age45P=0;
	$age55P=0;
	$jum15=0;
	$jum20=0;
	$jum30=0;
	$jum45=0;
	$jum55=0;
	$jumL=0;
	$jumP=0;
	$totalumur=0;
foreach ($data as $i => $d) {
	$gender = $d['jk'];
	$tahunExp = explode("-", $d['exp'])[0];
	$tahunLahir = explode("-", $d['tanggal_lahir'])[0];
	$umur = $tahunExp - $tahunLahir;
	if ($umur >=15 && $umur <= 19 ) {
		if($gender == "LAKI-LAKI"){
		$age15L++;
	}else if($gender == "PEREMPUAN"){
		$age15P++;
		}
		$jum15=$age15L+$age15P;
	}
	if ($umur >=20 && $umur <= 29 ) {
		if($gender == "LAKI-LAKI"){
		$age20L++;
	}else if($gender == "PEREMPUAN"){
		$age20P++;
		}
		$jum20=$age20L+$age20P;
	}
	if ($umur >=30 && $umur <= 44 ) {
		if($gender == "LAKI-LAKI"){
		$age30L++;
	}else if($gender == "PEREMPUAN"){
		$age30P++;
		}
		$jum30=$age30L+$age30P;
	}
	if ($umur >=45 && $umur <= 54 ) {
		if($gender == "LAKI-LAKI"){
		$age45L++;
	}else if($gender == "PEREMPUAN"){
		$age45P++;
		}
		$jum45=$age45L+$age45P;
	}
	if ($umur >=55) {
		if($gender == "LAKI-LAKI"){
		$age55L++;
	}else if($gender == "PEREMPUAN"){
		$age55P++;
		}
		$jum55=$age55L+$age55P;
	}
	$jumL=$age15L+$age20L+$age30L+$age45L+$age55L;
	$jumP=$age15P+$age20P+$age30P+$age45P+$age55P;
	$totalumur=$jumL+$jumP;
}

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
$pdf->SetFont('arial','B',12);
$pdf->text(3.6,0.7,'LAPORAN IPK');
$pdf->text(2.1,1,'DINAS SOSIAL TENAGA KERJA DAN TRANSMIGRASI');
$pdf->text(3.2,1.3,'KABUPATEN PURBLINGGA');
$pdf->text(3.5,1.6,'PENCARI KERJA');
$pdf->SetFont('arial','',12);
$pdf->setXY(1.6,2.5);
$pdf->MultiCell(1,0.2,"Nomor",1,'C');
$pdf->setXY(2.6,2.5);
$pdf->MultiCell(1.5,0.2,"Kelompok Umur",1,'C');
$pdf->setXY(4.1,2.5);
$pdf->MultiCell(1.0,0.2,"L",1,'C');
$pdf->setXY(5.1,2.5);
$pdf->MultiCell(1,0.2,"P",1,'C');
$pdf->setXY(6.1,2.5);
$pdf->MultiCell(1,0.2,"Jumlah",1,'C');
$pdf->setXY(1.6,2.7);
$pdf->MultiCell(1,0.2,"1",1,'C');
$pdf->setXY(2.6,2.7);
$pdf->MultiCell(1.5,0.2,"15-19",1,'C');
$pdf->setXY(4.1,2.7);
$pdf->MultiCell(1.0,0.2,"$age15L",1,'C');
$pdf->setXY(5.1,2.7);
$pdf->MultiCell(1,0.2,"$age15P",1,'C');
$pdf->setXY(6.1,2.7);
$pdf->MultiCell(1,0.2,"$jum15",1,'C');
$pdf->setXY(1.6,2.9);
$pdf->MultiCell(1,0.2,"2",1,'C');
$pdf->setXY(2.6,2.9);
$pdf->MultiCell(1.5,0.2,"20-29",1,'C');
$pdf->setXY(4.1,2.9);
$pdf->MultiCell(1.0,0.2,"$age20L",1,'C');
$pdf->setXY(5.1,2.9);
$pdf->MultiCell(1,0.2,"$age20P",1,'C');
$pdf->setXY(6.1,2.9);
$pdf->MultiCell(1,0.2,"$jum20",1,'C');
$pdf->setXY(1.6,3.1);
$pdf->MultiCell(1,0.2,"3",1,'C');
$pdf->setXY(2.6,3.1);
$pdf->MultiCell(1.5,0.2,"30-44",1,'C');
$pdf->setXY(4.1,3.1);
$pdf->MultiCell(1.0,0.2,"$age30L",1,'C');
$pdf->setXY(5.1,3.1);
$pdf->MultiCell(1,0.2,"$age30P",1,'C');
$pdf->setXY(6.1,3.1);
$pdf->MultiCell(1,0.2,"$jum30",1,'C');
$pdf->setXY(1.6,3.3);
$pdf->MultiCell(1,0.2,"4",1,'C');
$pdf->setXY(2.6,3.3);
$pdf->MultiCell(1.5,0.2,"45-54",1,'C');
$pdf->setXY(4.1,3.3);
$pdf->MultiCell(1.0,0.2,"$age45L",1,'C');
$pdf->setXY(5.1,3.3);
$pdf->MultiCell(1,0.2,"$age45P",1,'C');
$pdf->setXY(6.1,3.3);
$pdf->MultiCell(1,0.2,"$jum45",1,'C');
$pdf->setXY(1.6,3.5);
$pdf->MultiCell(1,0.2,"5",1,'C');
$pdf->setXY(2.6,3.5);
$pdf->MultiCell(1.5,0.2,">=55",1,'C');
$pdf->setXY(4.1,3.5);
$pdf->MultiCell(1.0,0.2,"$age55L",1,'C');
$pdf->setXY(5.1,3.5);
$pdf->MultiCell(1,0.2,"$age55P",1,'C');
$pdf->setXY(6.1,3.5);
$pdf->MultiCell(1,0.2,"$jum55",1,'C');
$pdf->setXY(1.6,3.7);
$pdf->MultiCell(2.5,0.2,"JUMLAH",1,'C');
$pdf->setXY(4.1,3.7);
$pdf->MultiCell(1.0,0.2,"$jumL",1,'C');
$pdf->setXY(5.1,3.7);
$pdf->MultiCell(1,0.2,"$jumP",1,'C');
$pdf->setXY(6.1,3.7);
$pdf->MultiCell(1,0.2,"$totalumur",1,'C');
$pdf->setXY(1.6,6);
$pdf->MultiCell(1,0.2,"Nomor",1,'C');
$pdf->setXY(2.6,6);
$pdf->MultiCell(1.5,0.2,"Tingkat Pendidikan",1,'C');
$pdf->setXY(4.1,6);
$pdf->MultiCell(1.0,0.2,"L",1,'C');
$pdf->setXY(5.1,6);
$pdf->MultiCell(1,0.2,"P",1,'C');
$pdf->setXY(6.1,6);
$pdf->MultiCell(1,0.2,"Jumlah",1,'C');
$pdf->setXY(1.6,6.2);
$pdf->MultiCell(1,0.2,"1",1,'C');
$pdf->setXY(2.6,6.2);
$pdf->MultiCell(1.5,0.2,"SD",1,'C');
$pdf->setXY(4.1,6.2);
$pdf->MultiCell(1.0,0.2,"$jumlahSDLaki",1,'C');
$pdf->setXY(5.1,6.2);
$pdf->MultiCell(1,0.2,"$jumlahSDPer",1,'C');
$pdf->setXY(6.1,6.2);
$pdf->MultiCell(1,0.2,"$jumsd",1,'C');
$pdf->setXY(1.6,6.4);
$pdf->MultiCell(1,0.2,"2",1,'C');
$pdf->setXY(2.6,6.4);
$pdf->MultiCell(1.5,0.2,"SMP",1,'C');
$pdf->setXY(4.1,6.4);
$pdf->MultiCell(1.0,0.2,"$jumlahSMPLaki",1,'C');
$pdf->setXY(5.1,6.4);
$pdf->MultiCell(1,0.2,"$jumlahSMPPer",1,'C');
$pdf->setXY(6.1,6.4);
$pdf->MultiCell(1,0.2,"$jumsmp",1,'C');
$pdf->setXY(1.6,6.6);
$pdf->MultiCell(1,0.2,"3",1,'C');
$pdf->setXY(2.6,6.6);
$pdf->MultiCell(1.5,0.2,"MTs",1,'C');
$pdf->setXY(4.1,6.6);
$pdf->MultiCell(1.0,0.2,"$jumlahMTSLaki",1,'C');
$pdf->setXY(5.1,6.6);
$pdf->MultiCell(1,0.2,"$jumlahMTSPer",1,'C');
$pdf->setXY(6.1,6.6);
$pdf->MultiCell(1,0.2,"$jummts",1,'C');
$pdf->setXY(1.6,6.8);
$pdf->MultiCell(1,0.2,"4",1,'C');
$pdf->setXY(2.6,6.8);
$pdf->MultiCell(1.5,0.2,"SMA",1,'C');
$pdf->setXY(4.1,6.8);
$pdf->MultiCell(1.0,0.2,"$jumlahSMALaki",1,'C');
$pdf->setXY(5.1,6.8);
$pdf->MultiCell(1,0.2,"$jumlahSMAPer",1,'C');
$pdf->setXY(6.1,6.8);
$pdf->MultiCell(1,0.2,"$jumsma",1,'C');
$pdf->setXY(1.6,7);
$pdf->MultiCell(1,0.2,"5",1,'C');
$pdf->setXY(2.6,7);
$pdf->MultiCell(1.5,0.2,"MA",1,'C');
$pdf->setXY(4.1,7);
$pdf->MultiCell(1.0,0.2,"$jumlahMALaki",1,'C');
$pdf->setXY(5.1,7);
$pdf->MultiCell(1,0.2,"$jumlahMAPer",1,'C');
$pdf->setXY(6.1,7);
$pdf->MultiCell(1,0.2,"$jumma",1,'C');
$pdf->setXY(1.6,7.2);
$pdf->MultiCell(1,0.2,"6",1,'C');
$pdf->setXY(2.6,7.2);
$pdf->MultiCell(1.5,0.2,"SMK",1,'C');
$pdf->setXY(4.1,7.2);
$pdf->MultiCell(1.0,0.2,"$jumlahSMKLaki",1,'C');
$pdf->setXY(5.1,7.2);
$pdf->MultiCell(1,0.2,"$jumlahSMKPer",1,'C');
$pdf->setXY(6.1,7.2);
$pdf->MultiCell(1,0.2,"$jumsmk",1,'C');
$pdf->setXY(1.6,7.4);
$pdf->MultiCell(1,0.2,"7",1,'C');
$pdf->setXY(2.6,7.4);
$pdf->MultiCell(1.5,0.2,"D-1",1,'C');
$pdf->setXY(4.1,7.4);
$pdf->MultiCell(1.0,0.2,"$jumlahD1Laki",1,'C');
$pdf->setXY(5.1,7.4);
$pdf->MultiCell(1,0.2,"$jumlahD1Per",1,'C');
$pdf->setXY(6.1,7.4);
$pdf->MultiCell(1,0.2,"$jumd1",1,'C');
$pdf->setXY(1.6,7.6);
$pdf->MultiCell(1,0.2,"8",1,'C');
$pdf->setXY(2.6,7.6);
$pdf->MultiCell(1.5,0.2,"D-2",1,'C');
$pdf->setXY(4.1,7.6);
$pdf->MultiCell(1.0,0.2,"$jumlahD2Laki",1,'C');
$pdf->setXY(5.1,7.6);
$pdf->MultiCell(1,0.2,"$jumlahD2Per",1,'C');
$pdf->setXY(6.1,7.6);
$pdf->MultiCell(1,0.2,"$jumd2",1,'C');
$pdf->setXY(1.6,7.8);
$pdf->MultiCell(1,0.2,"9",1,'C');
$pdf->setXY(2.6,7.8);
$pdf->MultiCell(1.5,0.2,"D-3",1,'C');
$pdf->setXY(4.1,7.8);
$pdf->MultiCell(1.0,0.2,"$jumlahD3Laki",1,'C');
$pdf->setXY(5.1,7.8);
$pdf->MultiCell(1,0.2,"$jumlahD3Per",1,'C');
$pdf->setXY(6.1,7.8);
$pdf->MultiCell(1,0.2,"$jumd3",1,'C');
$pdf->setXY(1.6,8);
$pdf->MultiCell(1,0.2,"10",1,'C');
$pdf->setXY(2.6,8);
$pdf->MultiCell(1.5,0.2,"D-4",1,'C');
$pdf->setXY(4.1,8);
$pdf->MultiCell(1.0,0.2,"$jumlahD4Laki",1,'C');
$pdf->setXY(5.1,8);
$pdf->MultiCell(1,0.2,"$jumlahD4Per",1,'C');
$pdf->setXY(6.1,8);
$pdf->MultiCell(1,0.2,"$jumd4",1,'C');
$pdf->setXY(1.6,8.2);
$pdf->MultiCell(1,0.2,"11",1,'C');
$pdf->setXY(2.6,8.2);
$pdf->MultiCell(1.5,0.2,"S-1",1,'C');
$pdf->setXY(4.1,8.2);
$pdf->MultiCell(1.0,0.2,"$jumlahS1Laki",1,'C');
$pdf->setXY(5.1,8.2);
$pdf->MultiCell(1,0.2,"$jumlahS1Per",1,'C');
$pdf->setXY(6.1,8.2);
$pdf->MultiCell(1,0.2,"$jums1",1,'C');
$pdf->setXY(1.6,8.4);
$pdf->MultiCell(1,0.2,"12",1,'C');
$pdf->setXY(2.6,8.4);
$pdf->MultiCell(1.5,0.2,"S-2",1,'C');
$pdf->setXY(4.1,8.4);
$pdf->MultiCell(1.0,0.2,"$jumlahS2Laki",1,'C');
$pdf->setXY(5.1,8.4);
$pdf->MultiCell(1,0.2,"$jumlahS2Per",1,'C');
$pdf->setXY(6.1,8.4);
$pdf->MultiCell(1,0.2,"$jums2",1,'C');
$pdf->setXY(1.6,8.6);
$pdf->MultiCell(1,0.2,"13",1,'C');
$pdf->setXY(2.6,8.6);
$pdf->MultiCell(1.5,0.2,"PROFESI",1,'C');
$pdf->setXY(4.1,8.6);
$pdf->MultiCell(1.0,0.2,"$jumlahProfLaki",1,'C');
$pdf->setXY(5.1,8.6);
$pdf->MultiCell(1,0.2,"$jumlahProfPer",1,'C');
$pdf->setXY(6.1,8.6);
$pdf->MultiCell(1,0.2,"$jumprof",1,'C');
$pdf->setXY(1.6,8.8);
$pdf->MultiCell(2.5,0.2,"JUMLAH",1,'C');
$pdf->setXY(4.1,8.8);
$pdf->MultiCell(1.0,0.2,"$jumpendL",1,'C');
$pdf->setXY(5.1,8.8);
$pdf->MultiCell(1,0.2,"$jumpendP",1,'C');
$pdf->setXY(6.1,8.8);
$pdf->MultiCell(1,0.2,"$totalpend",1,'C');
$pdf->Output();