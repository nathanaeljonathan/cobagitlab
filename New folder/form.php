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
                <li><a href="/dinsos/index.php">Home </a></li>
                <!-- <li><a href="/dinsos/about.php"> About Us </a></li> -->
                <li class="active"><a href="/dinsos/form.php">Form AK-1 </a></li>
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
    <td colspan="3"><input type="text" name="no_regis" size="70" placeholder="" required></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>1.2</strong></td>
    <td><strong>No. KTP</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><input type="text" name="no_ktp" size="70" data-dismiss="modal" placeholder="" required></td></td>
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
    <td colspan="3"><input type="text" name="nama" size="49" placeholder="Nama Lengkap" required></td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>2.2</strong></td>
    <td><strong>TTL</strong></td>
    <td><strong>:</strong></td>
    <td colspan="2"><input type="text" name="tempat" size="25" placeholder="Tempat Lahir" required>
    </td><td><input style="width: 120px;" type="text" name="tanggal_lahir" class="input-group date form-control" date="" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" required></td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>2.3</strong></td>
    <td><strong>Jenis Kelamin</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><select name="jk" placeholder="" required>
      <option>-silahkan pilih-</option>
      <option>Laki-Laki</option>
      <option>Perempuan</option>
    </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>2.4</strong></td>
    <td><strong>Tinggi Badan</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><input type="text" name="tinggi" size="25" placeholder="" required> cm</td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>2.5</strong></td>
    <td><strong>Berat Badan</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><input type="text" name="berat" size="25" placeholder="" required> kg</td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>2.5</strong></td>
    <td><strong>Alamat</strong></td>
    <td><strong>:</strong></td>
    <td width="39"><strong>Kab.</strong></td>
    <td width="99" colspan="2"><input type="text" name="kab" size="30" placeholder="Kabupaten" required></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Kec.</strong></td>
    <td colspan="2"><input type="text" name="kec" size="30" placeholder="Kecamatan" required></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Kel.</strong></td>
    <td colspan="2"><input type="text" name="kel" size="30" placeholder="Kelurahan" required></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>RT.</strong></td>
    <td colspan="2"><input type="text" name="rt" size="15" placeholder="RT" required></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>RW.</strong></td>
    <td colspan="2"><input type="text" name="rw" size="15" placeholder="RW" required></td>
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
    <td colspan="3"><input type="text" name="kode" size="30" placeholder="Berdasarkan Tempat Tinggal"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>2.9</strong></td>
    <td><strong>Status</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><select name="status">
      <option>-silahkan pilih-</option>
      <option>MENIKAH</option>
      <option>BELUM MENIKAH</option>
    </select></td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>2.1.1</strong></td>
    <td><strong>Agama</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><select name="agama">
      <option>-silahkan pilih-</option>
      <option>ISLAM</option>
      <option>KRISTEN</option>
      <option>HINDU</option>
      <option>BUDHA</option>
      <option>LAINNYA</option>
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
    <td colspan="3"><select name="pend">
    <option>-silahkan pilih-</option>
      <option> SD </option>
      <option> SMP </option>
      <option> SMA </option>
      <option> D-1 </option>
      <option> D-2 </option>
      <option> D-3 </option>
      <option> D-4 </option>
      <option> S-1 </option>
      <option> S-2 </option>
      <option> PROFESI </option>
    </select></td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Jurusan</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><input type="text" name="jur" size="30" placeholder="Jurusan pada Pendidikan Terakhir" required></td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Tahun Lulus</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><input type="text" name="lulus" size="30" placeholder="Tahun Lulus Pendidikan Terakhir" required></td>
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
      <option>-silahkan pilih-</option>
      <option>Inggris</option>
      <option>Jerman</option>
      <option>Jepang</option>
      <option>Mandarin</option>      
      <option>Belanda</option>
      <option>Perancis</option>
      <option>Arab</option>
      <option>Lainnya</option>
      </select>
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
    <td colspan="3"><input type="text" name="jabatan" size="30" placeholder="Jabatan yang Diinginkan" required></td>
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
    <td colspan="3"><select name="lokasi"> 
      <option>-silahkan pilih-</option>
      <option>Lokasi Tempat Tinggal</option>
      <option>Wilayah Lain</option>
      <option>Luar Negeri</option>
      </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>5.3</strong></td>
    <td><strong>Perkiraan Gaji</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><select name="gaji"> 
      <option>-silahkan pilih-</option>
      <option>< Rp.1.000.000</option>
      <option>Rp.1.000.000 - Rp.2.500.000</option>
      <option>Rp.2.500.000 - Rp.5.000.000</option>
      <option>>Rp.5.000.000</option>
      </select></td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>Tanggal</strong></td>
    <td><strong>:</strong></td>
    <td colspan="3"><input type="date" name="tanggal" required></td>
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
       <a href="#"><img src="images/footerlogo.png" alt=""  class="footerLogo"> </a>
        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl. Ut wisi enim ad minim veniam.</p>
        <p class="copyRight">Copyright 2015. All rights reserved. 
        Designed &amp; Powered by <a href="http://www.seoexpertsindia.com/" target="_blank">Seoexpertsindia.com</a></p>
      </div>
      <div class="col-xs-12 col-sm-6 col-lg-5">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-lg-5 col-lg-offset-2">
          <h4>Links</h4>
           <nav>
            <ul>
              <!-- <li><a href="/dinsos/about.php">About Us</a></li> -->
               <li><a href="/dinsos/form.php">Form AK-1</a></li>
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
