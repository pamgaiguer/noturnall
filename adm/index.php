<!DOCTYPE html>
<html>
<head>
	<?php include '../config/connection.php';?>
	<?php
	if($con){
		echo "Banco de Dados Conectado com Sucesso !!!";
	}else{
		echo "Erro ao Estabelece a Conexão com a Base de Dados!";
	}
	?>
	<?php include '../includes/_seo.php';?>
</head>
<body>
	<?php include '../includes/_menunav.php';?>
	<div class="container">
		<h1>Painel adm noturnall</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-7"></div>
			<div class="col-xs-12 col-md-5"></div>
		</div>
	</div>
	<br>
	<div id="footer">
		<div class="container">
			<p class="text-center footer-all">Noturnall @ 2013 - All Rights Reserved - Website illustration by Carlos Fides (<a href="http://www.artside.com.br/" target="_blank">Artside Digital Studio</a>) and programming by <a href="http://www.pamellagaiguer.com" target="_blank">Pamella Gaiguer</a></p>
		</div>
	</div>
	<script src="../js/jquery-2.1.0.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>