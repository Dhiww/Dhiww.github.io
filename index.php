<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN-WAROENG KITA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 bg bg-dark text-light fw-bold">
				<div class="login100-pic js-tilt" data-tilt style="padding-bottom:100px;">
					<img src="img/logo2.png" width="300px" alt="IMG">
				</div>
		<form action="" method="POST">
			<h2 class="p-3">LOGIN WAROENG <br> BERSAMA</h2>
		<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Username</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="user" placeholder="Username">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input type="password" class="form-control" id="exampleFormControlInput1" name="pass" placeholder="Password">
</div>
			<button class="btn-kirim btn btn-warning" type="submit" name="submit" >Masuk</button>
		</form>
		<?php
		if (isset($_POST['submit'])) {
			$user =$_POST['user'];
			$pass =$_POST['pass'];
			$data_user =mysqli_query($koneksi, "SELECT * FROM petugas WHERE username = '$user' AND password = '$pass'");
			$r = mysqli_fetch_array($data_user);
			$username =$r['username'];
			$password =$r['password'];
			$id =$r['id_petugas'];
			$level= $r['level'];
			$nama = $r['nama_petugas'];
			if($user==$username && $pass==$password){
				$_SESSION['level'] = $level;
				$_SESSION['nama_petugas'] = $nama;
				$_SESSION['id_petugas'] = $id;
			header("Location: beranda.php");
			}else {
			echo "<script>alert('Login Gagal');</script>";
		}
		}
		?>
	</div>

	</div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>