<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DINAS SOSIAL TENAGA KERJA DAN TRANSMIGRASI KABUPATEN PURBALINGGA</title>
<!--Stylesheet-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/core.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link href="css/bootstrap-datepicker.css" rel="stylesheet">
<!--Jquery-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!--[if lt IE 9]>
<link href="css/ie8/ie8.css" type="text/css" rel="stylesheet" />
<![endif]-->
</head>

<body>
<!--Header HTML Starts Here-->
<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-3 col-md-4"><a id="logo" href="index.php"><img src="images/logo.jpg" class="img-responsive" alt="" title="wordpress">PEMERINTAH DAERAH PURBALINGGA</a> </div>
      <div class="col-xs-12 col-sm-9 col-md-8">
        <!--<div class="topPhone pull-right"><p>+1-9876543210</p></div>-->
        <div class="clearfix"></div>
        <nav class="navbar marginBottom">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <nav>
              <ul class="nav navbar-nav mainNavigation">
                <li class="active"><a href="/dinsos/index.php">Form AK-II</a></li>
                <!-- <li><a href="/dinsos/about.php"> About Us </a></li> -->
                <!-- <li class="active"><a href="/dinsos/form.php">Form AK-1 </a></li> -->
                <li><a href="/dinsos/tata.php">Tata cara & Persyaratan</a></li>
                <!-- <li><a href="/dinsos/contact.php">Contact Us </a></li> -->
              </ul>
              </nav>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>


<style>
#daftar{
  background:#transparent;
  border:1px solid #ccc;
  margin:auto;
  width:800px;
  padding:4px;
  border-radius:3px;
}
.texbox{
   border:1px solid #ccc;
   height:25px;
}
.texarea{
   border:1px solid #ccc;

}
.btn{
    width:85px;
    height:30px;
    color:#099;
    font-weight:bold;
    margin-bottom:3px;
    }
.btn:hover{
   background:#333;
   color:#fff;
   font-weight:bold;
   cursor:pointer;
   border:2px solid #099;
   border-radius:4px;
    }
</style>


<div id="daftar">
 <form class="form-horizontal" action="i.php" method="POST">
<p align="center">&raquo;FORM PENDAFTARAN AK-II / KARTU KUNING &laquo;</p>
<table width="409" class="table table-striped">
  <tr>
    <td colspan="7"><strong>No</strong></td>
  </tr>
  <tr>
    <td width="36"><strong>1.</strong></td>
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="33"><strong>1.1</strong></td>
    <td width="153"><strong>No. Regis</strong></td>
    <td width="3"><strong>:</strong></td>
    <td colspan="3"><input type="text" name="no_regis" size="70" placeholder="Nomor Registrasi" required autofocus></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>1.2</strong></td>
    <td><strong>No. KTP</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><input type="text" name="no_ktp" size="70" data-dismiss="modal" placeholder="Nomor KTP" required autofocus></td></td>
  </tr>
  <tr>
    <td colspan="7">&nbsp;</td>
  </tr>
  <tr>
    <td><strong>2.</strong></td>
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>2.1</strong></td>
    <td><strong>Nama</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><input type="text" name="nama" size="49" placeholder="Nama Lengkap" required autofocus></td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>2.2</strong></td>
    <td><strong>TTL</strong></td>
    <td><strong>:</strong></td>
    <td colspan="2"><input type="text" name="tempat" size="25" placeholder="Tempat Lahir" required autofocus>
    </td><td><input type="date" name="tanggal_lahir" required></td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>2.3</strong></td>
    <td><strong>Jenis Kelamin</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><select name="jk" placeholder="" required autofocus>
      <option>-silahkan pilih-</option>
      <option  value="1">LAKI-LAKI</option>
      <option  value="2">PEREMPUAN</option>
    </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>2.4</strong></td>
    <td><strong>Tinggi Badan</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><input type="text" name="tinggi" size="25" placeholder="" required autofocus> cm</td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>2.5</strong></td>
    <td><strong>Berat Badan</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><input type="text" name="berat" size="25" placeholder="" required autofocus> kg</td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>2.5</strong></td>
    <td><strong>Alamat</strong></td>
    <td><strong>:</strong></td>
    <td width="39"><strong>Kab.</strong></td>
    <td width="99" colspan="2"><label>PURBALINGGA</label> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Kec.</strong></td>
    <td colspan="2"><input type="text" name="kec" size="30" placeholder="Kecamatan" required autofocus></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Kel.</strong></td>
    <td colspan="2"><input type="text" name="kel" size="30" placeholder="Kelurahan" required autofocus></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>RT.</strong></td>
    <td colspan="2"><input type="text" name="rt" size="15" placeholder="RT" required autofocus></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>RW.</strong></td>
    <td colspan="2"><input type="text" name="rw" size="15" placeholder="RW" required autofocus></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>2.6</strong></td>
    <td><strong>Telepon</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><input type="text" name="telepon" size="30" placeholder="Telp/HP"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>2.7</strong></td>
    <td><strong>Email</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><input type="text" name="email" size="30" placeholder="Email yang Masih Aktif"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>2.8</strong></td>
    <td><strong>Kode Pos</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><input type="text" name="kode" size="30" placeholder="Berdasarkan Tempat Tinggal" required autofocus></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>2.9</strong></td>
    <td><strong>Status</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><select name="status" required autofocus>
      <option>-silahkan pilih-</option>
      <option value="1">MENIKAH</option>
      <option value="2">BELUM MENIKAH</option>
	<option value="3">CERAI MATI</option>
      <option value="4">CERAI HIDUP</option>
    
    </select></td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>2.1.1</strong></td>
    <td><strong>Agama</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><select name="agama" required autofocus>
      <option>-silahkan pilih-</option>
      <option value="1">ISLAM</option>
      <option value="2">KRISTEN</option>
      <option value="3">HINDU</option>
      <option value="4">BUDHA</option>
      <option value="5">KATOLIK</option>
    </select></td></td>
  </tr>
  <tr>
    <td colspan="7">&nbsp;</td>
  </tr>
  <tr>
    <td><strong>3.</strong></td>
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>3.1</strong></td>
    <td><strong>Pendidikan Terakhir</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><select name="pend" required autofocus>
    <option>-silahkan pilih-</option>
      <option value="1"> SD </option>
      <option value="2"> SMP </option>
      <option value="3"> MTs </option>
      <option value="4"> SMA </option>
      <option value="5"> SMK </option>
      <option value="6"> MA </option>
      <option value="7"> D-1 </option>
      <option value="8"> D-2 </option>
      <option value="9"> D-3 </option>
      <option value="10"> D-4 </option>
      <option value="11"> S-1 </option>
      <option value="12"> S-2 </option>
      <option value="13"> PROFESI </option>
    </select></td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Jurusan</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><input type="text" name="jur" size="30" placeholder="Jurusan pada Pendidikan Terakhir" required autofocus></td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Tahun Lulus</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><input type="text" name="lulus" size="30" placeholder="Tahun Lulus Pendidikan Terakhir" required autofocus></td>
  </tr>
  <tr>
    <td colspan="7">&nbsp;</td>
  </tr>
  <tr>
    <td><strong>4.</strong></td>
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>4.1</strong></td>
    <td><strong>Bahasa yang Dikuasai</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><select name="bahasa"> 
    <option value="9">-silahkan pilih-</option>
     <option value="1">Inggris</option>
     <option value="2">Jerman</option>
     <option value="3">Jepang</option>
     <option value="4">Mandarin</option>
     <option value="5">Belanda</option>
     <option value="6">Perancis</option>
     <option value="7">Arab</option>
     <option value="8">Lainnya</option>
      </select></td>
  </tr>
  <tr>
    <td colspan="7">&nbsp;</td>
  </tr>
  <tr>
    <td><strong>5.</strong></td>
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>5.1</strong></td>
    <td><strong>Jabatan</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><select name="jabatan" required autofocus> 
      <option>-silahkan pilih-</option>
      <option value="1">Tenaga Profesional, Teknisi & Tenaga YBDI</option>
      <option value="2">Tenaga Kepemimpinan & Ketatalaksanaan</option>
      <option value="3">Pejabat Pelaksana, Tenaga Tata Usaha & Tenaga YBDI</option>
      <option value="4">Tenaga Usaha Penjualan</option>
      <option value="5">Tenaga Usaha Jasa</option>
      <option value="6">Tenaga Usaha Pertanian</option>
      <option value="7">Tenaga Produksi & Tenaga YBDI</option>
      </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Perusahaan</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><input type="text" name="perusahaan" size="30" placeholder="Perusahaan yang Akan Dituju"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>5.2</strong></td>
    <td><strong>Lokasi</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><select name="lokasi" required autofocus> 
      <option>-silahkan pilih-</option>
      <option value="1">Lokasi Tempat Tinggal</option>
      <option value="2">Wilayah Lain</option>
      <option value="3">Luar Negeri</option>
      </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>5.3</strong></td>
    <td><strong>Perkiraan Gaji</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><select name="gaji" required autofocus> 
      <option >-silahkan pilih-</option>
      <option value="1"> < Rp.1.000.000</option>
      <option value="2">Rp.1.000.000 - Rp.2.500.000</option>
      <option value="3">Rp.2.500.000 - Rp.5.000.000</option>
      <option value="4">>Rp.5.000.000</option>
      </select></td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Tanggal</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><input type="date" name="tanggal" required autofocus></td>
  </tr>
</table>
</tr>
<input type="submit" name="simpan" value="Daftar" class="btn" onclick="return confirm('Apakah Anda Yakin Data yang Anda Masukkan Sudah Benar ?')"></a>

</form>
</div>

<script src="js/bootstrap-datepicker.js"></script>
    <script>
    $('.date').datepicker({
        format: 'dd-mm-yyyy',
    })
    </script>


<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-lg-6">
       <a href="#"><img src="images/logo.jpg" alt=""  class="footerLogo"> DINAS SOSIAL TENAGA KERJA DAN TRANSMIGRASI PURBALINGGA </a>
        <p>DINAS SOSIAL TENAGA KERJA KABUPATEN PURBALINGGA </p>
        <p class="copyRight">Copyright 2016. All rights reserved. 
        </p>
      </div>
      <div class="col-xs-12 col-sm-6 col-lg-5">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-lg-5 col-lg-offset-2">
          <h4>Links</h4>
           <nav>
            <ul>
              <!-- <li><a href="/dinsos/about.php">About Us</a></li> -->
               <li><a href="/dinsos/form.php">Form AK-II</a></li>
              <li><a href="/dinsos/tata.php">Tata cara & Persyaratan</a></li>
              <!-- <li><a href="/dinsos/contact.php">Contact Us</a></li> -->
            </ul>
            </nav>
          </div>
          <div class="col-xs-12 col-sm-6 col-lg-5"> <h4>Alamat</h4>
            <div class="location">
              <p>Jl. let. Jend. S Parman No.17 <br>
                    PURBALINGGA</p>
            </div>
            <div class="phone">
              <p>(0281) 891187</p>
            </div>
            <div class="fax"><p>(0281) 894861</p></div>
            <div class="code"><p>KODE 53316</p></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Footer HTML Ends Here-->
</body>
</html>
