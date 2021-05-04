<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<title>Menu</title>
	<link rel = "icon" type = "imagens/png" href = "imagens/logo_1.png"><!--Icone Title-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/menuacesso.css">
</head>
<body>
		<form name='menu'	method='POST'>
<?php
		include 'conexao_mysql.php';
		session_start();
			$email=$_SESSION["email"];
			$foto = mysqli_query($conexao,"SELECT * FROM usuario WHERE email = '$email'"); 
			$sql_campo = mysqli_fetch_assoc($foto);
			echo "<h1 style='font-family:Courier New'>";
			echo 'Bem-vindo(a) ' .$_SESSION['nome'];
			echo "</h1>";
			echo "<img src='imagens/fotos_perfil/".$sql_campo['foto']."' width=300px height=300px>";	
?>
		</form>
			<p><a href="dadosgerais.php"><button class ="buttonseucadastro">Seu Cadastro</button></a>
					
			<a href="desativarsessao.php"><button class ="buttondesativa">Logout</button></a>
			
			<h3 style='font-family:Cursive'>Menu de Opções</h3>
			
			<a href="atualizardadosgerais.php"><button class ="buttonaltera">Alterar Dados Cadastrais</button></a>
			
			<a href="matricula.html"><button class = 'buttonrealiza'>Realizar Matrícula</button></a>
			
			<a href="relacaocursomatricula.php"><button class="buttonrelacao">Relação Matrícula Ordem Nome do Curso</button></a>
			
			<a href="visitas.html"><button class="buttonvisita">Avaliar Nosso Site</button></a>
			
			<a href="delete.html"><button class="buttondelete">Excluir Matrícula</button></a>
</body>
</html>									