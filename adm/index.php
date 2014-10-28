<?php
require_once ('connection.php');
header('Content-Type: text/html; charset=UTF-8');

if (!function_exists("GetSQLValueString")) {
	function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
	{
	  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);
	  switch ($theType) {
	    case "text":
	      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
	      break;
	    case "long":
	    case "int":
	      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
	      break;
	    case "double":
	      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
	      break;
	    case "date":
	      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
	      break;
	    case "defined":
	      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
	      break;
	  }
	  return $theValue;
	}
}
if(!isset($_SESSION)) {
	session_start();
}
$loginFormAction=$_SERVER['PHP_SELF'];
	if(isset($_GET['accesscheck'])) {
	$_SESSION['PrevUrl']=$_GET['accesscheck'];
}
if(isset($_POST['form-user'])) {
	$loginUsername=$_POST['form-user'];
	$password=$_POST['form-pass'];
	$MM_fldUserAuthorization="";
	$MM_redirectLoginSuccess="home.php";
	$MM_redirectLoginFailed="index.php";
	$MM_redirecttoReferrer=false;

mysql_select_db($banco,$con);
	$LoginRS__query=sprintf("SELECT usr_name, usr_password FROM users WHERE usr_name=%s AND usr_password=%s",GetSQLValueString($loginUsername,"text"),GetSQLValueString($password,"text"));
	$LoginRS=mysql_query($LoginRS__query,$con) or die(mysql_error());
	$loginFoundUser=mysql_num_rows($LoginRS);
	if($loginFoundUser) {
		$loginStrGroup="";
		$_SESSION['MM_Username']=$loginUsername;
		$_SESSION['MM_UserGroup']=$loginStrGroup;
	if(isset($_SESSION['PrevUrl'])&&false) {
		$MM_redirectLoginSuccess=$_SESSION['PrevUrl'];
	}
		header("Location: ".$MM_redirectLoginSuccess);
		} else {
		header("Location: ".$MM_redirectLoginFailed);
	}
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
				<h1>Painel Adm - Noturnall</h1>
				<form action="<?php echo $loginFormAction; ?>" method="post" role="form">
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