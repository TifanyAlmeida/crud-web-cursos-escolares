<html>
<head>
	<meta charset = "UTF-8">
	<head>
	<title>Login</title>
	<link rel = "icon" type = "imagens/png" href = "imagens/logo_1.png"><!--Icone Title-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
<?php
   include "conexao_mysql.php";
   $email=$_POST["email"];
   $senha=$_POST["senha"];
   $criptografando = base64_encode($senha);
	 $sql_logar = mysqli_query($conexao,"SELECT * FROM usuario WHERE email = '$email' && senha = '$criptografando'");    
   $sql_campos = mysqli_fetch_assoc($sql_logar);
   if (mysqli_num_rows($sql_logar) == 0){
		echo '<script language="JavaScript" charset="utf-8">alert("Login Inválido!")</script>';
		$vezes=mysqli_query($conexao,"update usuario set vezes=vezes+1 where email='$email'");
		echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=login.html">';
   }
   else{
	   
	   if ($sql_campos ["vezes"]>3){
				echo "Usuario desativado!";
				echo "<p><a href='login.html'>Tente outro ou cadastre um novo usuario</a>";
		}	
		else{
			session_start();
			$_SESSION["email"] = $_POST["email"];
			$_SESSION["nome"]    = $sql_campos["nome"];
			$_SESSION["foto"] = $sql_campos["foto"];
			header("Location: menu.php");     
		}
   }
?>

</body>
</html>
