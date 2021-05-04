<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<head>
	<title>Matrícula</title>
	<link rel = "icon" type = "imagens/png" href = "imagens/logo_1.png"><!--Icone Title-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/relacaocurso.css">
</head>
<body>
		<center>
		<br><br>
		<h1 style='font-family:Cursive'>Matrículas Realizadas</h1>
		<br><br><br>
<?php

	include 'conexao_mysql.php';

	if (!isset($_SESSION))
		session_start();

	$varusuario=$_SESSION['email'];

	$buscardadosnoBD=mysqli_query($conexao,"select * from matricula where usuario='$varusuario' order by curso");

	echo "<table border=1>";
	echo "<tr><th>Usuário</th><th>Curso</th><th>Horário</th></tr>";
	while ($linha = mysqli_fetch_array($buscardadosnoBD)) {
    	echo "<tr><td>".$linha['usuario']."</td>";
		echo "<td>".$linha['curso']."</td>";
		echo "<td>".$linha['horario']."</td></tr>";
    }
    echo "</table>";

?>
		</center>
		<br>
		<div class="home">
			<a href="menu.php">Voltar</a>
		</div>
</body>
</html>