<?php
session_start();
if($_SESSION){
  // header("Location: user.php");
}

        if(isset($_POST['login'])){
          include("koneksi.php");

          
          $username = $_POST['user'];
          $password = $_POST['pass'];
          //$level    = $_POST['level'];
          
          $query = mysqli_query($koneksi, "SELECT * FROM login WHERE username='$username'  AND password='$password'");
          if(mysqli_num_rows($query) == 2){
            $_SESSION['user']=$username;
            $_SESSION['pass']=$password;
            header("Location: home.php");
            
          }else{
            echo '<div align="center" class="alert alert-danger">Username atau password salah.</div>';
            // $row = mysqli_fetch_array($query);
            
            // if($row['level'] == 1 && $level == 1){
            //   $_SESSION['username']=$username;
            //   $_SESSION['level']='admin';
            
            // }else if($row['level'] == 2 && $level == 2){
            //   $_SESSION['username']=$username;
            //   $_SESSION['level']='dosen';
            //   header("Location: user.php");
            // }else if($row['level'] == 3 && $level == 3){
            //   $_SESSION['username']=$username;
            //   $_SESSION['level']='mahasiswa';
            //   header("Location: user.php");
            // }else
            
             // echo '<div class="alert alert-danger">Username atau password salah.</div>';
            }
          }
        
        ?>