<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<head>
	<title>Visitas</title>
	<link rel = "icon" type = "imagens/png" href = "imagens/logo_1.png"><!--Icone Title-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/numerovisita.css">
</head>
<body>
	<center>
		<br><br>
		<h1 style='font-family:Cursive'>Avaliações</h1>
		<br><br><br>

<?php

	include 'conexao_mysql.php';

	if (!isset($_SESSION))
		session_start();
	
	
	$buscardadosnoBD=mysqli_query($conexao,"select * from visita;");

	echo "<table border=1>";
	echo "<tr><th>Notas</th><th>Comentários</th>";
	while ($linha = mysqli_fetch_array($buscardadosnoBD)) {
    	echo "<tr><td>".$linha['nota']."</td>";
		echo "<td>".$linha['comentario']."</td>";
    }
    echo "</table>";

?>
<br>
	<div class="home">
			<a href="index.phtml">Voltar</a>
		</div>
</body>
</html>