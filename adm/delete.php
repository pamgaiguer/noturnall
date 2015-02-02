<?php
require_once ('../config/connection.php');
if (!isset($_SESSION)) {
	session_start();
}
$query = "SELECT dts_date, dts_local, dts_city_state
FROM dates
WHERE dts_active = 1
ORDER BY dts_id desc";
mysql_select_db('noturnall');
$result = mysql_query($query);
$rows = array();
while ($row = mysql_fetch_assoc($result)) {
	array_push($rows, $row);
}
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
				<ol class="breadcrumb">
					<li><a href="home.php">Home</a></li>
					<li class="active">Excluir data</li>
				</ol>
				<h1>Painel Adm - Noturnall</h1>
				<a href="home.php" class="btn btn-primary">Voltar</a>
				<h3>Datas cadastradas</h3>
				<table class="table table-bordered table-condensed">
					<thead>
						<tr>
							<th class="text-center"><input type="checkbox" class="check_all" value="check-dates"></th>
							<th>Data</th>
							<th>Local</th>
							<th>Cidade/Estado</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($rows as $key => $val){
							echo "
							<tr>
								<td class='text-center'><input type='checkbox' value='check-dates'></td>
								<td>{$val['dts_date']}</td>
								<td>{$val['dts_local']}</td>
								<td>{$val['dts_city_state']}</td>
							</tr>";
						}
						?>
					</tbody>
				</table>
				<input type="button" class="btn btn-danger" value="Apagar data(s) selecionada(s)">
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
	<script>
		$(document).ready(function () {
			$('input[type="checkbox"]').removeClass('applied').unbind("click");

			$(".check_all").change(function() {
				var val = $(this).val();
				if( $(this).is(":checked") ) {
					$(":checkbox[value='"+val+"']").attr("checked", true);
				}
				else {
					$(":checkbox[value='"+val+"']").attr("checked", false);
				}
			});
		});
	</script>
</body>
</html>