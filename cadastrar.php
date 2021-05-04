<html>
<head>
	<meta charset = "UTF-8">
	<head>
	<title>Cadastro</title>
	<link rel = "icon" type = "imagens/png" href = "imagens/logo_1.png"><!--Icone Title-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/style_info_on.css">
</head>
<body>
<?php
	date_default_timezone_set('America/Sao_Paulo');
    $datahora_atual=date('Y/m/d H:i');
	$conexao = mysqli_connect("127.0.0.1:3307", "root", "", "site_info_on");
	if (!$conexao){
		echo "Erro na conexão com a base de dados!";
	}
	else{
		$varsenha = $_POST["senha"];
		$criptografando = base64_encode($varsenha);
		$varnome=$_POST ["nome"];
		$varemail=$_POST ["email"];
		$varfoto=$_POST ["foto"];
		
		$query = mysqli_query($conexao, "INSERT INTO usuario(email,senha,foto,nome,vezes)
		VALUES('$varemail','$criptografando','$varfoto','$varnome',0)");
		
		echo '<script language="Javascript" charset="utf-8">
		alert("Cadastrado com sucesso!")</script><p>';
		
		
		 echo "Poderia mandar para o banco de dados a senha criptografada: $criptografando<br>";
		 echo "Descriptografado: ";
		 echo base64_decode($criptografando);
	}
?>
		<div class="home">
			<a href="index.phtml">Voltar</a>
		</div>
</body>
</html>