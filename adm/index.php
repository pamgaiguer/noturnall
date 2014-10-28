<?php
	require_once ('../config/connection.php');
	session_start();
	session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<?php include '../config/connection.php';?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10,chrome=1">
	<title>Noturnall - Painel Administrativo</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header"><a class="navbar-brand" href="#">Noturnall</a></div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>Painel Adm - Noturnall</h1>
				<form action="valida.php" method="post" role="form">
					<div class="row">
						<div class="form-group col-lg-4">
							<label for="form-user">Usuário</label>
							<input type="text" name="form-user" class="form-control">
							<label for="form-pass">Senha</label>
							<input type="password" name="form-pass" class="form-control">
							<br>
							<input type="submit" class="btn btn-primary" value="Entrar">
						</div>
						<div class="col-lg-8"></div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="footer">
		<div class="container">
			<p class="text-left">Noturnall &copy 2014 - All Rights Reserved - Developed by <a href="http://www.pamellagaiguer.com" target="_blank">Pamella Gaiguer</a></p>
		</div>
	</div>
	<script src="js/jquery-2.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>