<?php
session_start();
require 'config/functions.php';
if (@$_SESSION["level"]=="administrator") {
	header("Location: dashboard/");
} elseif (@$_SESSION["level"]=="user")  {
	header("Location: quiz/");
	exit;
}
if (isset($_POST["submit"])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = mysqli_query($conn, "SELECT * FROM tbl_akun WHERE username ='$username'");
	$cek = mysqli_num_rows($query);
	if ($cek > 0) {
		$row = mysqli_fetch_assoc($query);
		if (password_verify($password, $row["password"])) {
			if ($row["level"]=="administrator") {
				$_SESSION["username"] = $username;
				$_SESSION["level"] = "administrator";
				$_SESSION["key"] = "administrator";
				header("Location: dashboard/");
		}elseif($row["level"]=="user") {
				$_SESSION["username"] = $username;
				$_SESSION["level"] = "user";
				header("Location: quiz/");
				exit;
		}	
	 }
	 $passwordSalah = true;
  } else {
	  $tidakAda = true;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/img/logo.ico" />
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" href="assets/vendor/animate/animate.css">
	<link rel="stylesheet" href="assets/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" href="assets/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" href="assets/vendor/select2/select2.min.css">
	<link rel="stylesheet" href="assets/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="assets/css/util.css">
	<link rel="stylesheet" href="assets/css/main.css">
</head>

<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="" method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Quiz Training Center RS. Azra
					</span>
					<div class="wrap-input100 validate-input" data-validate="Masukkan username: adrianadhari">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Masukkan password">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" name="submit" class="login100-form-btn">
							Login
						</button>
						<?php
							if(isset($tidakAda)) {
								echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
								Maaf, username yang anda masukkan tidak cocok dengan data manapun.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span></button></div>';
							}
							if(isset($passwordSalah)) {
								echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
								Maaf, password yang anda masukkan salah.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span></button></div>';
							}
						?>
					</div>
					<br>
					<label for="register">Belum punya akun? Klik register dibawah ini</label>
					<div class="container-login101-form-btn" id="register">
						<a href="register.php" name="submit" class="login101-form-btn">
							Register
						</a>
					</div>
				</form>
				<div class="login100-more" style="background-image: url('assets/img/bg.jpg');">
				</div>
			</div>
		</div>
	</div>
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="assets/vendor/animsition/js/animsition.min.js"></script>
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/select2/select2.min.js"></script>
	<script src="assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="assets/vendor/countdowntime/countdowntime.js"></script>
	<script src="assets/js/main.js"></script>
</body>

</html>