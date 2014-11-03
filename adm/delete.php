<?php
require 'connection.php';

session_start();

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
				<?php
				if($con){
					echo "<p>Banco de dados conectado com sucesso !!!</p>";
				}else{
					echo "<p>Erro ao estabelecer a conexão com a base de dados!</p>";
				}
				?>
				<h1>Painel Adm - Cadastrar nova data</h1>
				<a href="home.php" class="btn btn-primary">Voltar</a>
				<br><br>
				<form action="new_send.php" method="post" role="form">
					<div class="row">
						<div class="col-lg-4">
							<div class="form-group">
								<label for="data">Data</label>
								<input type="text" class="form-control" name="form-date" required>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label for="local">Local</label>
								<input type="text" class="form-control" name="form-local" required>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label for="city">Cidade/Estado</label>
								<input type="text" class="form-control" name="form-city" required>
							</div>
						</div>
					</div>
					<input type="submit" class="btn btn-primary" value="Cadastrar">
				</form>
			</div>
		</div>
	</div>

	<div id="footer">
		<div class="container">
			<p class="text-center">Noturnall &copy 2014 - All Rights Reserved - Developed by <a href="http://www.pamellagaiguer.com" target="_blank">Pamella Gaiguer</a></p>
		</div>
	</div>
	<script src="js/jquery-2.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>