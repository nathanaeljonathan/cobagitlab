<?php
include("koneksi.php");
include("proseslogin.php");
$user=($_SESSION['user']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta http-equiv="refresh" content="10" > --> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DINAS TENAGA KERJA KABUPATEN PURBALINGGA</title>
    <link rel="icon" href='icon.png'>

    <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/bootstrap-datepicker.css" rel="stylesheet">
    <link href="asset/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        background-position: center;
        background-image: url('asset/ca.jpg');
        background-size: 100%;
        background-repeat: no-repeat;
        background-attachment: fixed;
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>
    
    
    <script src="asset/js/jquery-1.12.0.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/jquery.dataTables.min.js"></script>
    <script src="asset/js/dataTables.bootstrap.min.js"></script>

    <script> $(document).ready(function() {$('#kotak').dataTable();} );</script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <li>
                <a href="/naker/admin/tanggal.php" target="newwindow">Laporan IPK</a>
                </li>
                
                <li>
                <a class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Selamat datang : <?php echo $user; ?>&nbsp;<span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
                <li><a href="logout.php">Keluar&nbsp;<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></li>
            </ul>

    
</div>
            <!-- /.navbar-collapse -->
    </div>
        <!-- /.container -->
    </nav>
    
    <div class="container">

            <h2 align="center">Data Pencaker</h2>
            <hr/>

            <?php
       
           
         if(isset($_POST['save'])){    
            
    $pencaker_id        = $_POST['pencaker_id'];
    $no_regis           = $_POST['no_regis'];
    $no_ktp             = $_POST['no_ktp'];
    $nama               = $_POST['nama'];
    $tempat             = $_POST['tempat'];
    $tanggal_lahir      = $_POST['tanggal_lahir'];
    $jk                 = $_POST['jk'];
    $tinggi             = $_POST['tinggi'];
    $berat              = $_POST['berat'];
    $kec                = $_POST['kec'];
    $kel                = $_POST['kel'];
    $rt                 = $_POST['rt'];
    $rw                 = $_POST['rw'];
    $telepon            = $_POST['telepon'];
    $email              = $_POST['email'];
    $kode               = $_POST['kode'];
    $status             = $_POST['status'];
    $agama              = $_POST['agama'];
    $pend               = $_POST['pend'];
    $jur                = $_POST['jur'];
    $lulus              = $_POST['lulus'];
    $bahasa             = $_POST['bahasa'];
    $jabatan            = $_POST['jabatan'];
    $perusahaan         = $_POST['perusahaan'];
    $lokasi             = $_POST['lokasi'];
    $gaji               = $_POST['gaji'];
    $tanggal            = $_POST['tanggal'];  
   
            $update = mysqli_query($koneksi, "UPDATE pelanggan SET no_regis='$no_regis', no_ktp='$no_ktp', nama='$nama',tempat='$tempat', tanggal_lahir='$tanggal_lahir', jk='$jk', tinggi='$tinggi', berat='$berat',kecamatan='$kec', kelurahan='$kel',rt='$rt', rw='$rw', telp='$telepon', email='$email', kode='$kode', status='$status', agama='$agama', pend='$pend', jurusan='$jur', tahun_lulus='$lulus', bahasa='$bahasa', jabatan='$jabatan', pt='$perusahaan', lokasi='$lokasi', gaji='$gaji', exp='$tanggal' WHERE pencaker_id = '$pencaker_id'") or die(mysqli_error($koneksi));
                if($update){
                    echo "<script>alert('Data berhasil diubah')</script>";
                    unset($_POST['save']);
                }else{
                    echo "<script>alert('Data gagal diubah')</script>";
                    }
                }

            ?>
            
                    
                
                        
                        
            <?php
            if(isset($_GET['aksi']) == 'delete'){
                $no_ktp = $_GET['no_ktp'];
                $cek = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE no_ktp='$no_ktp'");
                if(mysqli_num_rows($cek) == 0){
                    echo "<div href='home.php'</div>";
                }else{
                    $delete = mysqli_query($koneksi, "DELETE FROM pelanggan WHERE no_ktp='$no_ktp'");
                    if($delete){
                        echo "<script>alert('Data berhasil dihapus')</script>";
                    }else{
                        echo "<script>alert('Data gagal dihapus')</script>";
                    }
                }
            }
            ?>     
       <!--      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever=""><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Laporan IPK</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Pilih tanggal</h4>
            </div>

            <div class="modal-body">
            <form class="form-horizontal" action="" method="post">

            <div class="form-group">
                <label class="col-sm-5 control-label">Dari Tanggal</label>
                <div class="col-sm-5">
                <input style="width: 120px;" type="text" name="tanggal" class="input-group date form-control" date="" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" required>
            </div>
            </div>
            <div class="form-group">
                <label class="col-sm-5 control-label">Sampai Tanggal</label>
                <div class="col-sm-5">
                <input style="width: 120px;" type="text" name="tanggal" class="input-group date form-control" date="" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" required>
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-5">
            </div>
            <div class="col-sm-5">
                <input href="laporan.php" type="submit" name="cetak" class="btn btn-sm btn-primary" value="Cetak">
                <a href="laporan.php" class="btn btn-sm btn-danger">Batal</a>
            </div>
            </div>
            </div>
            </div>
            </form>
            </div>
    </div>    --> 
                    <div class="content">


<!-- Menu Edit Data -->
            
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                </div>
                </div>
            </div>
            </div>

        


<!-- Menampilkan Data dalam bentuk tabel --> 

            <br />
            <br />
            <div class="table-responsive">
            <table id="kotak" class="table table-bordered table-striped table-hover" cellspacing="0" >
                <thead>
                <tr>
                    <th class="active" >No</th>
                    <th class="active" >Nomor KTP</th>
                    <th class="active" >Nama</th>
                    <th class="active" >Tempat Lahir</th>
                    <th class="active" >Tanggal Lahir</th>
                    <th class="active" >Jenis Kelamin</th>
                    <th class="active" >Pendidikan</th>
                    <th class="active" >Tahun Lulus</th>
                    <th class="active" >Kecamatan</th>
                    <th class="active" >Nomor Telepon</th>
                    <th class="active" >Tools</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $sql = mysqli_query($koneksi, "SELECT * FROM pelanggan left join agama on pelanggan.agama=agama.id left join gaji on pelanggan.gaji=gaji.id left join jenis_kelamin on pelanggan.jk=jenis_kelamin.id left join pendidikan on pelanggan.pend=pendidikan.id left join status on pelanggan.status=status.id left join lokasi on pelanggan.lokasi=lokasi.id left join jabatan on pelanggan.jabatan=jabatan.id left join bahasa on pelanggan.bahasa=bahasa.id ORDER BY pencaker_id DESC");
                
                if(mysqli_num_rows($sql) == 0){
                    echo '<tr><td colspan="12">Data Tidak Ada.</td></tr>';
                }else{
                    $no = 1;
                    while($row = mysqli_fetch_assoc($sql)){
                        echo '
                        <tr>

                            <td class="active" align="center">'.$row['no_regis'].'</td>
                            <td class="active" align="center">'.$row['no_ktp'].'</td>
                            <td class="active" align="center">'.$row['nama'].'</td>
                            <td class="active" align="center">'.$row['tempat'].'</td>
                            <td class="active" align="center">'.$row['tanggal_lahir'].'</td>
                            <td class="active" align="center">'.$row['kelamin'].'</td>
                            <td class="active" align="center">'.$row['pendidikan'].'</td>
                            <td class="active" align="center">'.$row['tahun_lulus'].'</td>
                            <td class="active" align="center">'.$row['kecamatan'].'</td>
                            <td class="active" align="center">'.$row['telp'].'</td>

                            <td class="active" align="center">
                                
                                <a href="edit.php?test=coba&pencaker_id='.$row['pencaker_id'].'" title="Edit Data" onclick="return" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal1" data-whatever=""><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                <a href="detail.php?no_ktp='.$row['no_ktp'].'" title="View Data" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal1" data-whatever="$no_ktp"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                <a href="print.php?no_ktp='.$row['no_ktp'].'" target="newwindow" title="Cetak Data" data-toggle="tooltip" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>
                                <a href="home.php?aksi=delete&no_ktp='.$row['no_ktp'].'" title="Hapus Data" onclick="return confirm(\'Anda yakin akan menghapus data '.$row['nama'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                
                            </td>
                        </tr>
                        ';
                        $no++;
                    }
                }
                ?>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
     </div>
</div>
<!-- Bootstrap Core JavaScript -->
    <script src="asset/js/bootstrap-datepicker.js"></script>
    <script>
    $('.date').datepicker({
        format: 'dd-mm-yyyy',
    })
    </script>



</br>
</br>
</br>
<nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
        <div class="container">
        <div class="text-center" class="navbar-footer">
                    
        <p style="color:#f5f5f5">Copyright &copy; 2016. DINAS TENAGA KERJA KABUPATEN PURBALINGGA
                        </p>
        
         </div>
        </div>
    </nav>
</body>
</html>