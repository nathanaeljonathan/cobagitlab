<?php
include("koneksi.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DINAS TENAGA KERJA PURBALINGGA</title>
    <link rel="icon" href='icon.jpg'>

    <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/bootstrap-datepicker.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

</head>

<body>
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel" align="center">Ubah Data Pencaker</h4>
        </div>
        <div class="modal-body">

        
            <?php
            if (isset($_GET['test'])=='coba'){
            $pencaker_id   = (int)$_GET['pencaker_id'];          
             $sql = mysqli_query($koneksi, "SELECT * FROM pelanggan right join agama on pelanggan.agama=agama.id right join gaji on pelanggan.gaji=gaji.id right join jenis_kelamin on pelanggan.jk=jenis_kelamin.id right join pendidikan on pelanggan.pend=pendidikan.id right join status on pelanggan.status=status.id right join lokasi on pelanggan.lokasi=lokasi.id right join jabatan on pelanggan.jabatan=jabatan.id right join bahasa on pelanggan.bahasa=bahasa.id WHERE pencaker_id='$pencaker_id'");
            if(mysqli_num_rows($sql) == 0){
            echo "error";                                                                           
            }else{
                $row = mysqli_fetch_assoc($sql);
            }
    //         if(isset($_POST['save'])){
    // $pencaker_id        =$_GET['pencaker_id'];
    // $no_regis           = $_POST['no_regis'];
    // $no_ktp             = $_POST['no_ktp'];
    // $nama               = $_POST['nama'];
    // $tempat             = $_POST['tempat'];
    // $tanggal_lahir      = $_POST['tanggal_lahir'];
    // $jk                 = $_POST['jk'];
    // $tinggi             = $_POST['tinggi'];
    // $berat              = $_POST['berat'];
    // $kec                = $_POST['kec'];
    // $kel                = $_POST['kel'];
    // $rt                 = $_POST['rt'];
    // $rw                 = $_POST['rw'];
    // $telp               = $_POST['telepon'];
    // $email              = $_POST['email'];
    // $kode               = $_POST['kode'];
    // $status             = $_POST['status'];
    // $agama              = $_POST['agama'];
    // $pend               = $_POST['pendidikan'];
    // $jur                = $_POST['jur'];
    // $lulus              = $_POST['lulus'];
    // $bahasa             = $_POST['bahasa'];
    // $jabatan            = $_POST['jabatan'];
    // $perusahaan         = $_POST['perusahaan'];
    // $lokasi             = $_POST['lokasi'];
    // $gaji               = $_POST['gaji'];
    // $tanggal            = $_POST['tanggal'];            

                
               // $update = mysqli_query($koneksi, "UPDATE pelanggan SET no_regis='$no_regis', no_ktp='$no_ktp', nama='$nama', tempat='$tempat', tanggal_lahir='$tanggal_lahir', jk='$jk', tinggi='$tinggi', berat='$berat',kecamatan='$kec', kelurahan='$kel',rt='$rt', rw='$rw', telp='$telepon', email='$email', kode='$kode', status='$status', agama='$agama', pend='$pend', jurusan='$jur', tahun_lulus='$lulus', bahasa='$bahasa', jabatan='$jabatan', pt='$perusahaan', lokasi='$lokasi', gaji='$gaji', exp='$tanggal' WHERE pencaker_id = '$pencaker_id' ") or die(mysqli_error());
               //  if($update){
               //      header("Location: home.php? ID=".$ID."&pesan=sukses");
               //  }else{
               //      echo '<div align="center" class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
               //  }
            }
            
            ?>

        <form class="form-horizontal" action="" method="post">
        <input type="hidden" name="pencaker_id" value="<?php echo $row ['pencaker_id']; ?>">
        <div class="form-group">
            <label class="col-sm-5 control-label">Nomor Registrasi</label>
            <div class="col-sm-6">
            <input type="text" name="no_regis" value="<?php echo $row ['no_regis']; ?>" class="form-control" placeholder="Nomor Registrasi" required autofocus>
        </div>
        </div>

        <div class="form-group">
            <label class="col-sm-5 control-label">Nomor KTP</label>
            <div class="col-sm-6">
            <input type="text" name="no_ktp" value="<?php echo $row ['no_ktp']; ?>" class="form-control" placeholder="Nomor KTP"  required autofocus>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Nama</label>
            <div class="col-sm-6">
            <input type="text" name="nama" value="<?php echo $row ['nama']; ?>" class="form-control" placeholder="Nama Lengkap" required autofocus>
        </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-5 control-label">Tempat</label>
            <div class="col-sm-6">
            <input type="text" name="tempat" value="<?php echo $row ['tempat']; ?>" class="form-control" placeholder="" aria-describedby="basic-addon2" required autofocus>
        </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-5 control-label">Tanggal Lahir</label>
            <div class="col-sm-6">
           <input type="date" name="tanggal_lahir" value="<?php echo $row ['tanggal_lahir']; ?>" class="form-control" placeholder="" aria-describedby="basic-addon2" required autofocus>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Jenis Kelamin</label>
            <div class="col-sm-6">
            <select name="jk" class="form-control" placeholder="" required autofocus>
               <?php
               $a = "SELECT * FROM jenis_kelamin where kelamin ='" .$row['kelamin']."' ";
               $g = mysqli_query($koneksi,$a);
               $h = mysqli_fetch_array($g);
               echo "<option value =$h[0]>$h[1]</option>";
               $k = "SELECT * FROM jenis_kelamin where kelamin<>'".$row ['kelamin']."' ";
               $j = mysqli_query($koneksi,$k);
               while($l = mysqli_fetch_array($j)){
                    echo "<option value =$l[0]>$l[1]</option>";
               }
               echo "</select>";
               ?>
             </select>
        </select>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Tinggi</label>
            <div class="col-sm-6">
            <input type="text" name="tinggi" value="<?php echo $row ['tinggi']; ?>" class="form-control" placeholder="" required autofocus>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Berat</label>
            <div class="col-sm-6">
            <input type="text" name="berat" value="<?php echo $row ['berat']; ?>" class="form-control" placeholder="" required autofocus>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Kecamatan</label>
            <div class="col-sm-6">
            <input type="text" name="kec" value="<?php echo $row ['kecamatan']; ?>" class="form-control" placeholder="" required autofocus>
        </div>
        </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Kelurahan</label>
            <div class="col-sm-6">
            <input type="text" name="kel" value="<?php echo $row ['kelurahan']; ?>" class="form-control" placeholder="" required autofocus>
        </div>
        </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">RT</label>
            <div class="col-sm-6">
            <input type="text" name="rt" value="<?php echo $row ['rt']; ?>" class="form-control" placeholder="" required autofocus>
        </div>
        </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">RW</label>
            <div class="col-sm-6">
            <input type="text" name="rw" value="<?php echo $row ['rw']; ?>" class="form-control" placeholder="" required autofocus>
        </div>
        </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Telepon</label>
            <div class="col-sm-6">
            <input type="text" name="telepon" value="<?php echo $row ['telp']; ?>" class="form-control" placeholder="" required>
        </div>
        </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Email</label>
            <div class="col-sm-6">
            <input type="text" name="email" value="<?php echo $row ['email']; ?>" class="form-control">
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Kode Pos</label>
            <div class="col-sm-6">
            <input type="text" name="kode" value="<?php echo $row ['kode']; ?>" class="form-control" placeholder="" required autofocus>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Status</label>
            <div class="col-sm-6">
            <select name="status" class="form-control" placeholder="" required autofocus>
               <?php
               $a = "SELECT * FROM status where status ='" .$row['status']."' ";
               $g = mysqli_query($koneksi,$a);
               $h = mysqli_fetch_array($g);
               echo "<option value =$h[0]>$h[1]</option>";
               $k = "SELECT * FROM status where status<>'".$row ['status']."' ";
               $j = mysqli_query($koneksi,$k);
               while($l = mysqli_fetch_array($j)){
                    echo "<option value =$l[0]>$l[1]</option>";
               }
               echo "</select>";
               ?>
             </select>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Agama</label>
            <div class="col-sm-6">
            <select name="agama"  class="form-control" placeholder="" required autofocus>
               <?php
               $a = "SELECT * FROM agama where agama ='" .$row['agama']."' ";
               $g = mysqli_query($koneksi,$a);
               $h = mysqli_fetch_array($g);
               echo "<option value =$h[0]>$h[1]</option>";
               $k = "SELECT * FROM agama where agama<>'".$row ['agama']."' ";
               $j = mysqli_query($koneksi,$k);
               while($l = mysqli_fetch_array($j)){
                    echo "<option value =$l[0]>$l[1]</option>";
               }
               echo "</select>";
               ?>
             </select>
        </div>
        </div>
         <div class="form-group">
            <label class="col-sm-5 control-label">Pendidikan</label>
            <div class="col-sm-6">
            <select name="pend" class="form-control" placeholder="" required autofocus>
               <?php
               $a = "SELECT * FROM pendidikan where pendidikan ='" .$row['pendidikan']."' ";
               $g = mysqli_query($koneksi,$a);
               $h = mysqli_fetch_array($g);
               echo "<option value =$h[0]>$h[1]</option>";
               $k = "SELECT * FROM pendidikan where pendidikan<>'".$row ['pendidikan']."' ";
               $j = mysqli_query($koneksi,$k);
               while($l = mysqli_fetch_array($j)){
                    echo "<option value =$l[0]>$l[1]</option>";
               }
               echo "</select>";
               ?>
            </select>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Jurusan</label>
            <div class="col-sm-6">
            <input type="text" name="jur" value="<?php echo $row ['jurusan']; ?>" class="form-control" placeholder="" aria-describedby="basic-addon2">
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Tahun Lulus</label>
            <div class="col-sm-6">
            <input type="text" name="lulus" value="<?php echo $row ['tahun_lulus']; ?>" class="form-control" placeholder="" aria-describedby="basic-addon2" required autofocus>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Bahasa</label>
            <div class="col-sm-6">
            <select name="bahasa" class="form-control" placeholder="Bahasa yand Dikuasai">
               <?php
               $a = "SELECT * FROM bahasa where bahasa ='" .$row['bahasa']."' ";
               $g = mysqli_query($koneksi,$a);
               $h = mysqli_fetch_array($g);
               echo "<option value =$h[0]>$h[1]</option>";
               $k = "SELECT * FROM bahasa where bahasa<>'".$row ['bahasa']."' ";
               $j = mysqli_query($koneksi,$k);
               while($l = mysqli_fetch_array($j)){
                    echo "<option value =$l[0]>$l[1]</option>";
               }
               echo "</select>";
               ?>
            </select>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Jabatan</label>
            <div class="col-sm-6">
            <select name="jabatan" class="form-control" placeholder="Bahasa yand Dikuasai" required autofocus>
               <?php
               $a = "SELECT * FROM jabatan where jabatan ='" .$row['jabatan']."' ";
               $g = mysqli_query($koneksi,$a);
               $h = mysqli_fetch_array($g);
               echo "<option value =$h[0]>$h[1]</option>";
               $k = "SELECT * FROM jabatan where jabatan<>'".$row ['jabatan']."' ";
               $j = mysqli_query($koneksi,$k);
               while($l = mysqli_fetch_array($j)){
                    echo "<option value =$l[0]>$l[1]</option>";
               }
               echo "</select>";
               ?>
            </select>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Perusahaan</label>
            <div class="col-sm-6">
            <input type="text" name="perusahaan" value="<?php echo $row ['pt']; ?>" class="form-control" placeholder="Perusahaan yang Dituju" aria-describedby="basic-addon2">
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Lokasi</label>
            <div class="col-sm-6">
            <select name="lokasi" class="form-control" placeholder="Bahasa yand Dikuasai">
               <?php
               $a = "SELECT * FROM lokasi where lokasi ='" .$row['lokasi']."' ";
               $g = mysqli_query($koneksi,$a);
               $h = mysqli_fetch_array($g);
               echo "<option value =$h[0]>$h[1]</option>";
               $k = "SELECT * FROM lokasi where lokasi<>'".$row ['lokasi']."' ";
               $j = mysqli_query($koneksi,$k);
               while($l = mysqli_fetch_array($j)){
                    echo "<option value =$l[0]>$l[1]</option>";
               }
               echo "</select>";
               ?>
               </select>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Gaji</label>
            <div class="col-sm-6">
            <select name="gaji" class="form-control" placeholder="Perkiraan Gaji">
                 <?php
               $a = "SELECT * FROM gaji where gaji ='" .$row['gaji']."' ";
               $g = mysqli_query($koneksi,$a);
               $h = mysqli_fetch_array($g);
               echo "<option value =$h[0]>$h[1]</option>";
               $k = "SELECT * FROM gaji where gaji<>'".$row ['gaji']."' ";
               $j = mysqli_query($koneksi,$k);
               while($l = mysqli_fetch_array($j)){
                    echo "<option value =$l[0]>$l[1]</option>";
               }
               echo "</select>";
               ?>
            </select>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Tanggal Masuk</label>
            <div class="col-sm-6">
           <input type="date" name="tanggal" value="<?php echo $row ['exp']; ?>" class="form-control" placeholder="" aria-describedby="basic-addon2" required autofocus>
        </div>
        </div>
        <div class="form-group">
        <div class="col-sm-5">
        </div>
        <div class="col-sm-6">
        <input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan">
            <a href="home.php" class="btn btn-sm btn-danger">Batal</a>
            </div>
        </div>
        </div>
        </form>
        </div>


    <!-- jQuery Version 1.11.1 -->
    <script src="asset/js/jquery-1.12.0.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/bootstrap-datepicker.js"></script>
    <script>
    $('.date').datepicker({
        format: 'dd-mm-yyyy',
    })
    </script>

</body>

</html>
