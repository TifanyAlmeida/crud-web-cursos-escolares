<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<head>
	<title>Deletar Matrícula</title>
	<link rel = "icon" type = "imagens/png" href = "imagens/logo_1.png"><!--Icone Title-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/delete.css">
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
	
	$checar=mysqli_query($conexao,"SELECT * FROM matricula WHERE (usuario,curso,horario) = ('$varusuario','$varcurso','$varhorario')");
	
		if(mysqli_num_rows($checar) != null){

			$deletar=mysqli_query($conexao,"DELETE FROM matricula WHERE (usuario,curso,horario) = ('$varusuario','$varcurso','$varhorario')");
			
			echo '<script language="JavaScript" charset="utf-8">
			alert("Matrícula Deletada Com Sucesso!")</script><p>';
			echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=menu.php">';
		}
		
		else{
			echo '<script language="JavaScript" charset="utf-8">
			alert("Você Precisa Realizar a Matrícula Primeiro!")</script><p>';
			echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=matricula.html">';
		}
	}
?>
</body>
</html>