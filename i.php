<?php
    include ("koneksi.php");
 
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
    $telp               = $_POST['telepon'];
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

    $id=mysqli_query($koneksi, "SELECT no_ktp FROM pelanggan WHERE no_ktp='$no_ktp' ") or die(mysqli_error($koneksi));
    if (mysqli_num_rows($id)>0) {
?>
        <script language="JavaScript">

            alert('Nomor KTP sudah digunakan!/Nomor Registrasi sudah digunakan');
            document.location='index.php';
        </script>
<?php
   
    }
    $input    = mysqli_query($koneksi, "INSERT INTO pelanggan (no_regis,no_ktp,nama,tempat,tanggal_lahir,jk,tinggi,berat,kecamatan,kelurahan,rt,rw,telp,email,kode,status,agama,pend,jurusan,tahun_lulus,bahasa,jabatan,pt,lokasi,gaji,exp)
            VALUES ('$no_regis','$no_ktp','$nama','$tempat','$tanggal_lahir','$jk','$tinggi','$berat', '$kec', '$kel', '$rt', '$rw', '$telp','$email', '$kode', '$status', '$agama', '$pend', '$jur', '$lulus', '$bahasa', '$jabatan', '$perusahaan', '$lokasi', '$gaji', '$tanggal')") or die(mysqli_error($koneksi));
    if($input){
?>
        <script language="JavaScript">
            alert('Data Berhasil diinput!');
            document.location='index.php';
        </script>
                        }
             }
             <?php
         }
    else {
    //Jika Gagal
    echo "Data Gagal diinput, Silahkan diulangi!";
    }
    //Tutup koneksi engine MySQL
    mysql_close($Open);
?>       