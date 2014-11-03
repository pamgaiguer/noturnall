<?php
$data = $_POST['form-date'];
$local = $_POST['form-local'];
$city = $_POST['form-city'];

$servername = "dbmy0102.whservidor.com";
$username = "noturnall";
$password = "1q2w3e4r";
$dbname = "noturnall";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO dates (dts_date, dts_local, dts_city_state, dts_active, dts_record_by)
VALUES ('$data', '$local', '$city', 1, 1)";

if (mysqli_query($conn, $sql)) {
    echo "Novo registro inserido na base de dados<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

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
				<h1>Painel Adm - Data cadastrada com sucesso</h1>
				<a href="new.php" class="btn btn-primary">Voltar</a>
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