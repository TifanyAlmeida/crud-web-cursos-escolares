<html>
<head>
	<meta charset = "UTF-8">
	<head>
	<title>Atualizar dados</title>
	<link rel = "icon" type = "imagens/png" href = "imagens/logo_1.png"><!--Icone Title-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/atualizardados.css">
</head>
<body>
	<center>
	<br>
	<h1 style='font-family:Cursive'>Alterar Dados</h1>
	<br><br>
<?php

	include 'conexao_mysql.php';

	session_start();

	$usuariologado=$_SESSION['email'];

	$verificausuariologado=mysqli_query($conexao,"select * from usuario where email='$usuariologado'");

	$guardacampo=mysqli_fetch_assoc($verificausuariologado);
	
	
	echo "<form name='atualizardadosgerais' method='post' action='gravaralteracoes.php' enctype='multipart/ form-data'>";
	echo "<div class='atualizardadosgerais'>";

	echo "<p>Nome &#128100: </p><br><br>";
	echo "<input type='text' name='alteranome' class = 'inputnome' value=".$guardacampo['nome']."><br<br>";

	echo "<p>Email &#128231:</p> <input type='text' name='alteraemail' class = 'inputemail' value=".$guardacampo['email'].">";

	echo "<br><p><br>Senha &#128272: </p>";
	echo "<input type='text' name='alterasenha' class = 'inputsenha' value=".$guardacampo['senha'].">";

	echo "<p><input type='submit' value='Confirmar Alteração' class = 'inputbotao'></p>";

	echo "</div>";
	echo "</form>";
?>
		</center>
		<br>
		<div class="home">
			<a href="menu.php">Voltar</a>
		</div>
</body>
</html>