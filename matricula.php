<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<head>
	<title>Matrícula</title>
	<link rel = "icon" type = "imagens/png" href = "imagens/logo_1.png"><!--Icone Title-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/matriculaa.css">
</head>
<body>

<?php
	include 'conexao_mysql.php';
	if(!$conexao)
	{
		echo "Erro na conexão com a base de dados!";
	}
	else
	{
		session_start();

		$varcurso=$_POST["curso"];

		$varhorario=$_POST["horario"];

		$varusuario=$_SESSION['email'];

		$inserir=mysqli_query($conexao,"insert into matricula(usuario,curso,horario) values ('$varusuario','$varcurso','$varhorario')");
		
		echo '<script language="JavaScript" charset="utf-8">
		alert("Matrícula Realizada Com Sucesso!")</script><p>';
		echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=menu.php">';
	}
?>
</body>
</html>