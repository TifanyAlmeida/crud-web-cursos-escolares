<?php
	//Destrói a sessão criada
	session_destroy();

	//Remover as informações dos usuários
	unset($_SESSION['email'],$_SESSION['nome']);
	header("Location: index.phtml");
?>
