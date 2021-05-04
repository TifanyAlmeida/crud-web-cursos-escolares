<html>
<head>
	<meta charset = "UTF-8">
	<head>
	<title>Matrícula</title>
	<link rel = "icon" type = "imagens/png" href = "imagens/logo_1.png"><!--Icone Title-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/style_info_on.css">
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
		$nomecompleto=$_POST["nomecompleto"];
		$datanasc=$_POST["datanasc"];
		$telefone=$_POST["telefone"];
		$usuariologado=$_POST["email"];
		$cidade=$_POST["select"];
		
		$contato = mysqli_query($conexao, "INSERT INTO contato
		(nomecompleto, datanasc, telefone, email, cidade) VALUES
		('$nomecompleto', '$datanasc', '$telefone', '$usuariologado', '$cidade')");
		
		echo '<script language="JavaScript" charset="utf-8">
		alert("Dados Cadastrados!")</script><p>';
		echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=contato.html">';
	}
?>
</body>
</html>