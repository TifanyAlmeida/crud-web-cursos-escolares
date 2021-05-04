<html>
<head>
	<meta charset = "UTF-8">
	<head>
	<title>Visitas</title>
	<link rel = "icon" type = "imagens/png" href = "imagens/logo_1.png"><!--Icone Title-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/visita.css">
</head>
<body>
<?php
	include 'conexao_mysql.php';
	if(!$conexao){
		echo "Erro na conexão com a base de dados!";
	}
	else{
		$nota=$_POST["nota"];
		$comentario=$_POST["comentario"];
		$query = mysqli_query($conexao, "INSERT INTO visita(nota, comentario) VALUES ('$nota', '$comentario')");
		echo '<script language="JavaScript" charset="utf-8">
		alert("Sua avaliação foi efetuada com sucesso!")</script><p>';
		echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=menu.php">';
	}
?>
</body>
</html>