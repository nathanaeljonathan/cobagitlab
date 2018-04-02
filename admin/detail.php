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

    <title>DINAS SOSIAL TENAGA KERJA DAN TRANSMIGRASI PURBALINGGA</title>
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
            <h4 class="modal-title" id="exampleModalLabel" align="center">Detail Data Pencaker</h4>
        </div>
        <div class="modal-body">

        
            <?php
            $no_ktp = $_GET['no_ktp'];
            $sql = mysqli_query($koneksi, "SELECT * FROM pelanggan join agama on pelanggan.agama=agama.id join gaji on pelanggan.gaji=gaji.id join jenis_kelamin on pelanggan.jk=jenis_kelamin.id join pendidikan on pelanggan.pend=pendidikan.id join status on pelanggan.status=status.id join lokasi on pelanggan.lokasi=lokasi.id join bahasa on pelanggan.bahasa=bahasa.id join jabatan on pelanggan.jabatan=jabatan.id WHERE no_ktp='$no_ktp'");
            if(mysqli_num_rows($sql) == 0){
                header("Location: home.php");
            }else{
                $row = mysqli_fetch_assoc($sql);
            }
            if(isset($_POST['save'])){
                      $no_regis           = $_POST['no_regis'];
    $no_ktp             = $_POST['no_ktp'];
    $nama               = $_POST['nama'];
    $tempat             = $_POST['tempat'];
    $tanggal_lahir      = $_POST['tanggal_lahir'];
    $jk                 = $_POST['kelamin'];
    $tinggi             = $_POST['tinggi'];
    $berat              = $_POST['berat'];
    $kec                = $_POST['kec'];
    $kel                = $_POST['kel'];
    $rt                 = $_POST['rt'];
    $rw                 = $_POST['rw'];
    $telp               = $_POST['telepon'];
    $email              = $_POST['email'];
    $kode               = $_POST['kode'];
    $status             = $_POST['status'];
    $agama              = $_POST['agama'];
    $pend               = $_POST['pendidikan'];
    $jur                = $_POST['jur'];
    $lulus              = $_POST['lulus'];
    $bahasa             = $_POST['bahasa'];
    $jabatan            = $_POST['jabatan'];
    $perusahaan         = $_POST['perusahaan'];
    $lokasi             = $_POST['lokasi'];
    $gaji               = $_POST['gaji'];
    $tanggal            = $_POST['tanggal'];            

                
               $update = mysqli_query($koneksi, "UPDATE pelanggan SET no_regis='$no_regis', no_ktp='$no_ktp', nama='$nama', tanggal_lahir='$tanggal_lahir', jk='$jk', tinggi='$tinggi', berat='$berat', kecamatan='$kec', kelurahan='$kel',rt='$rt', rw='$rw', telp='$telepon', email='$email', kode='$kode', status='$status', agama='$agama', pend='$pend', jurusan='$jur', tahun_lulus='$lulus', bahasa='$bahasa', jabatan='$jabatan', pt='$perusahaan', lokasi='$lokasi', gaji='$gaji', exp='$tanggal' WHERE no_ktp='$no_ktp'") or die(mysqli_error());
                if($update){
                    header("Location: home.php?kode=".$kode."&pesan=sukses");
                }else{
                    echo '<div align="center" class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
                }
            }
            
            if(isset($_GET['pesan']) == 'sukses'){
                echo '<div align="center" class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil Simpan.</div>';
            }
            ?>

        <form class="form-horizontal" action="" method="post">
        <div class="form-group">
            <label class="col-sm-5 control-label">Nomor Registrasi</label>
            <div class="col-sm-6">
            <input type="text" name="no_regis" value="<?php echo $row ['no_regis']; ?>" class="form-control" placeholder="Nomor Registrasi" required autofocus>
        </div>
        </div>

        <div class="form-group">
            <label class="col-sm-5 control-label">Nomor KTP</label>
            <div class="col-sm-6">
            <input type="text" name="no_ktp" value="<?php echo $row ['no_ktp']; ?>" class="form-control" placeholder="Nomor KTP" aria-describedby="basic-addon1" required>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Nama</label>
            <div class="col-sm-6">
            <input type="text" name="nama" value="<?php echo $row ['nama']; ?>" class="form-control" placeholder="Nama Lengkap" required>
        </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-5 control-label">Tempat</label>
            <div class="col-sm-6">
            <input type="text" name="tempat" value="<?php echo $row ['tempat']; ?>" class="form-control" placeholder="" aria-describedby="basic-addon2" required>
        </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-5 control-label">Tanggal Lahir</label>
            <div class="col-sm-6">
           <input type="text" name="tanggal_lahir" value="<?php echo $row ['tanggal_lahir']; ?>" class="form-control" placeholder="" aria-describedby="basic-addon2" required>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Jenis Kelamin</label>
            <div class="col-sm-6">
            <input type="text" name="jk" value="<?php echo $row ['kelamin']; ?>" class="form-control" placeholder="" aria-describedby="basic-addon2" required>

        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Tinggi</label>
            <div class="col-sm-6">
            <input type="text" name="tinggi" value="<?php echo $row ['tinggi']; ?>" class="form-control" placeholder="" required>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Berat</label>
            <div class="col-sm-6">
            <input type="text" name="berat" value="<?php echo $row ['berat']; ?>" class="form-control" placeholder="" required>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Kecamatan</label>
            <div class="col-sm-6">
            <input type="text" name="kec" value="<?php echo $row ['kecamatan']; ?>" class="form-control" placeholder="" required>
        </div>
        </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">Kelurahan</label>
            <div class="col-sm-6">
            <input type="text" name="kel" value="<?php echo $row ['kelurahan']; ?>" class="form-control" placeholder="" required>
        </div>
        </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">RT</label>
            <div class="col-sm-6">
            <input type="text" name="rt" value="<?php echo $row ['rt']; ?>" class="form-control" placeholder="" required>
        </div>
        </div>
          <div class="form-group">
            <label class="col-sm-5 control-label">RW</label>
            <div class="col-sm-6">
            <input type="text" name="rw" value="<?php echo $row ['rw']; ?>" class="form-control" placeholder="" required>
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
            <input type="text" name="kode" value="<?php echo $row ['kode']; ?>" class="form-control" placeholder="" required>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Status</label>
            <div class="col-sm-6">
            <input type="text" name="status" value="<?php echo $row ['status']; ?>" class="form-control" placeholder="" aria-describedby="basic-addon2" required>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Agama</label>
            <div class="col-sm-6">
            <input type="text" name="agama" value="<?php echo $row ['agama']; ?>" class="form-control" placeholder="" aria-describedby="basic-addon2" required>
        </div>
        </div>
         <div class="form-group">
            <label class="col-sm-5 control-label">Pendidikan</label>
            <div class="col-sm-6">
            <input type="text" name="pend" value="<?php echo $row ['pendidikan']; ?>" class="form-control" placeholder="" aria-describedby="basic-addon2" required>
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
            <input type="text" name="lulus" value="<?php echo $row ['tahun_lulus']; ?>" class="form-control" placeholder="" aria-describedby="basic-addon2" required>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Bahasa</label>
            <div class="col-sm-6">
            <input type="text" name="bahasa" value="<?php echo $row ['bahasa']; ?>" class="form-control" placeholder="" aria-describedby="basic-addon2" required>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Jabatan</label>
            <div class="col-sm-6">
            <input type="text" name="jabatan" value="<?php echo $row ['jabatan']; ?>" class="form-control" placeholder="Jabatan yang Diinginkan" aria-describedby="basic-addon2">
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
            <input type="text" name="lokasi" value="<?php echo $row ['lokasi']; ?>" class="form-control" placeholder="" aria-describedby="basic-addon2" required>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Gaji</label>
            <div class="col-sm-6">
            <input type="text" name="lokasi" value="<?php echo $row ['gaji']; ?>" class="form-control" placeholder="" aria-describedby="basic-addon2" required>
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Tanggal Masuk</label>
            <div class="col-sm-6">
            <input type="text" name="tanggal" value="<?php echo $row ['exp']; ?>" class="form-control" placeholder="" aria-describedby="basic-addon2" required>
        </div>
        </div>
        <div class="form-group">
        <div class="col-sm-5">
        </div>
        <input type="hidden" name="no_ktp" value="<?php echo $no_ktp;?>">
        <div class="col-sm-6">
            <a href="home.php" class="btn btn-sm btn-danger">Tutup</a>
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
