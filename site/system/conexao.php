<?php
	session_start();
	
	##### Conex�o e Sele��o do Banco de Dados #####
	function abre_conexao() {
		if (strstr($_SERVER["HTTP_HOST"],".local") or $_SERVER["HTTP_HOST"] == "localhost" or $_SERVER["HTTP_HOST"] == "localhost:8090" or $_SERVER["HTTP_HOST"] == "servidor"){
			$con_host = "localhost"; // caminho do mysql.
			$con_usuario = "root"; // nome do usu�rio.
			$con_senha = ""; // senha de conex�o.
			$con_banco = "u812493276_easyd"; // nome do banco de dados mysql.
		} else {
			$con_host = "mysql.hostinger.com.br"; // caminho do mysql.
			$con_usuario = "u812493276_easyd"; // nome do usu�rio.
			$con_senha = "100603rr"; // senha de conex�o.
			$con_banco = "u812493276_easyd"; // nome do banco de dados mysql.
		}
		
		$conecta = mysql_connect($con_host, $con_usuario, $con_senha);
		$sel_db = mysql_select_db($con_banco, $conecta);
	}
	
	abre_conexao();
?>