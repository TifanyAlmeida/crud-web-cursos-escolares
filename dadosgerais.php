<html>
<head>
	<meta charset = "UTF-8">
	<head>
	<title>Matrícula</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel = "icon" type = "imagens/png" href = "imagens/logo_1.png"><!--Icone Title-->
	<link rel="stylesheet" href="css/dadosgeraiss.css">
</head>
<body>
<br><br>
<h2 style='font-family:Cursive'>DADOS DO USUÁRIO</h2>

<?php
	//Faz a conexão com o banco de dados - considerar o PHPMyAdmin através do servidor, usuário, senha e database - seguir esta ordem
	include 'conexao_mysql.php';
	
	//Busca o conteúdo da variável sessão criada através da página cookies.php
	session_start();
   	$usuariologado=$_SESSION['email'];

   	//Executa consulta SQL para apresentar os dados da tabela no PHP. Observem que ele está buscando os dados através da sessão email ($usuariologado)
   	$buscardadosnoBD=mysqli_query($conexao,"select * from usuario where email='$usuariologado'");

   	//Guarda na variável $campostabela os dados repassados com a execução do select
   	$campostabela = mysqli_fetch_assoc($buscardadosnoBD);
   	
   	//Apresenta os dados através de cada campo
	echo "<table>";
   	echo "<tr><td>Nome: <b>" . $campostabela["nome"] . "</b><p></td></tr>";
    echo "<tr><td>Login: <b>" . $campostabela["email"] . "</b><p></td></tr>";
   	echo "<tr><td>Senha: <b>" . $campostabela["senha"] . "</b><p></td></tr>";
   	echo "<tr><td>Total de vezes que acessou incorretamente com login e senha: <b>" . $campostabela["vezes"] . "</b><p></td></tr>";
	echo "</table>";
?>
<br>
	<div class="home">
			<a href="menu.php">Voltar</a>
		</div>
</body>
</html>