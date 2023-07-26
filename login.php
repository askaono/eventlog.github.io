<?php
	session_start();

	// Cek apakah pengguna sudah login, jika ya, redirect ke halaman utama
	if(isset($_SESSION['username'])) {
		header("Location: index.php");
		exit();
	}

	// Cek apakah form login telah disubmit
	if(isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		// Lakukan validasi login di sini, contoh sederhana:
		if($username === 'admin' && $password === 'admin123') {
			$_SESSION['username'] = $username;
			header("Location: index.php");
			exit();
		} else {
			$error = "Username atau password salah!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style>
		.container {
			margin-top: 100px;
		}
		.login-form {
			max-width: 400px;
			margin: 0 auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		.login-form h3 {
			text-align: center;
			margin-bottom: 20px;
		}
		.login-form .form-group {
			margin-bottom: 20px;
		}
		.login-form label {
			font-weight: bold;
		}
		.login-form .text-center {
			margin-top: 30px;
		}
		.logo-container {
			text-align: center;
			margin-bottom: 20px;
		}
		.logo-container img {
			max-width: 200px;
			height: auto;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="login-form">
					<div class="logo-container">
						<img src="path_to_your_logo.png" alt="Logo">
					</div>
					<h3>Evenlog Login</h3>
					<?php if(isset($error)) { ?>
						<div class="alert alert-danger"><?php echo $error; ?></div>
					<?php } ?>
					<form method="POST" action="">
						<div class="form-group">
							<label for="username">Username:</label>
							<input type="text" class="form-control" id="username" name="username" required>
						</div>
						<div class="form-group">
							<label for="password">Password:</label>
							<input type="password" class="form-control" id="password" name="password" required>
						</div>
						<div class="text-center">
							<button type="submit" name="login" class="btn btn-primary">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
