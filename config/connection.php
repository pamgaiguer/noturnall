<?php
// Caminho do Mysql
$caminho="dbmy0102.whservidor.com";

// Usuario de Acesso ao Mysql
$usuario="noturnall";

// Senha de Acesso do Mysql
$senha="1q2w3e4r";

// Nome do Banco
$banco="noturnall";

// Estabelece  a Conexao com o Mysql
$con = mysql_connect($caminho,$usuario,$senha)
    or die (mysql_error());

// Seleciona a Base de Dados
mysql_select_db($banco);

// Tratamento UTF-8 do MYSQL
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
?>