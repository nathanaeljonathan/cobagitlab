<?php
session_start();
if($_SESSION){
  
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>DINAS SOSIAL TENAGA KERJA DAN TRANSMIGRASI PURBALINGGA</title>
    <link rel="icon" href='icon.png'>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="asset/css/bootstrap.min.css" rel="stylesheet">
   <style>
body {
    background-image: url("asset/Kabupaten_purbalingga.png");
    background-repeat: no-repeat;
    background-position:center;
    background-size: 40%;
    background-attachment: fixed;
}
</style>
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="asset/css/styles.css" rel="stylesheet">
    <script src="asset/js/jquery-1.12.0.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
	</head>
	<body>

 <!--login modal-->
    <div class="row">
      <div class="col-md-4 col-md-offset-1 lompat">
      </div>
      </div>
      </div>

      <div class="row">
      <div class="col-md-4 col-md-offset-1 lompat">
      </div>
      </div>
<div class="row" style="align:center">
      <div class="col-xs-4 col-md-offset-4 lumpat">
<div class="panel panel-default">
<div class="panel-heading panel-heading-costum">
<h3 class="panel-tittle">Login</h3>
<div class="pull-left">
<div class="btn-group">
</div>
</div>
</div>
<div class= "login">
<?php
        if(isset($_POST['login'])){
          include("koneksi.php");
          
          $username = $_POST['user'];
          $password = $_POST['pass'];
          
          $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username'AND password='$password'");
          if(mysqli_num_rows($query) == 1){
            $_SESSION['user']=$username;
            header("Location: home.php");
            
          }else{
            echo '<div align="center" class="alert alert-danger">Username atau password salah.</div>';
                }
            }
        ?>
      <div class="panel-body">
          <form class="form col-md-12 center-block" method="post">
            <div class="form-group">
              <input type="text" name="user" class="form-control input-lg" placeholder="Username/Email" required autofocus/>
            </div>
            <div class="form-group">
              <input type="password" name="pass" class="form-control input-lg" placeholder="Password" required autofocus/>
            </div>
            <div class="form-group">
            <button type="submit" name="login" class="btn btn-primary btn-block">Masuk&nbsp;<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></button>
            </div>
          </div>
         
      </div>
  </div>
  </div>
</div>
</div>
</div>
	<!-- script references -->
		
    <script src="asset/js/jquery-1.12.0.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
	</body>
</html>