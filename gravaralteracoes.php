<html>
<head>
	<meta charset = "UTF-8">
	<head>
	<title>Alterar dados</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel = "icon" type = "imagens/png" href = "imagens/logo_1.png"><!--Icone Title-->
	<link rel="stylesheet" href="css/style_info_on.css">
</head>
<body>
<?php

	include 'conexao_mysql.php';

	session_start();

	$usuariologado=$_SESSION['email'];

	$alteranome=$_POST['alteranome'];

	$alteraemail=$_POST['alteraemail'];

	$alterasenha=$_POST['alterasenha'];


	$verificausuariologado=mysqli_query($conexao,"update usuario set nome='$alteranome',senha='$alterasenha',email='$alteraemail' where email='$usuariologado'");
	echo '<script language="JavaScript" charset="utf-8">alert("Dados atualizados!")</script>';
	echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=menu.php">';


?>
</body>
</html>