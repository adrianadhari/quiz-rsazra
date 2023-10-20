<?php
session_start();
require 'config/functions.php';
if (@$_SESSION["level"]=="administrator") {
	header("Location: dashboard/");
} elseif (@$_SESSION["level"]=="user")  {
	header("Location: quiz/");
	exit;
}
	$unitkerja = query("SELECT * FROM tbl_unitkerja");
	if( isset($_POST["submit"])) {
		if ( register($_POST) > 0) {
			header("Location: index.php");
		} else {
		echo mysqli_error($conn);
		}
	}
$result = query("SELECT * FROM tbl_unitkerja ORDER BY unitkerja ASC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register</title>
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
						REGISTER
					</span>
					<div class="wrap-input100 validate-input" data-validate="Masukkan nama: Adrian Adhari">
						<input class="input100" type="text" name="nama">
						<span class="focus-input100"></span>
						<span class="label-input100">Nama</span>
					</div>
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
					<div class="wrap-input100 validate-input" data-validate="Konfirmasi password">
						<input class="input100" type="password" name="password2">
						<span class="focus-input100"></span>
						<span class="label-input100">Confirm Password</span>
					</div>
					<div class="form-group">
						<label for="unitkerja">Unit Kerja</label>
						<select name="unitkerja" class="form-control" id="unitkerja" required>
							<?php foreach($result as $unitkerja) : ?>
							<option value="<?=$unitkerja['unitkerja']?>"><?=$unitkerja['unitkerja']?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<label>Jenis Kelamin</label>
					<div class="radioo">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin1"
								value="Laki - Laki" required>
							<label class="form-check-label" for="jeniskelamin1">Laki Laki</label>
						</div>&nbsp;&nbsp;&nbsp;
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin2"
								value="Perempuan" required>
							<label class="form-check-label" for="jeniskelamin2">Perempuan</label>
						</div>
					</div>
					<div class="container-login101-form-btn">
						<button type="submit" name="submit" class="login101-form-btn">
							Register
						</button>
					</div>
					<label for="already">Sudah mempunyai akun? Klik login dibawah ini</label>
					<a href="index.php" class="login100-form-btn" id="already">Login</a>
					<input type="hidden" name="level" value="user">
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