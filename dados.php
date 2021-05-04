<?php
	$nomecompleto=$_POST ["nomecompleto"]."\r\n";
	$datanasc=$_POST ["datanasc"]."\r\n";
	$email=$_POST ["email"]."\r\n";
	$telefone=$_POST ["telefone"]."\r\n";
	$cidade=$_POST ["select"]."\r\n";
	
	$arquivo = fopen("C:/xampp/htdocs/atividade_pwb/site_info_on/contato/dados.txt","a");
	fwrite ($arquivo,"Nome: ".$nomecompleto);
	fwrite ($arquivo,"Data de Nascimento: ".$datanasc);
	fwrite ($arquivo,"E-mail: ".$email);
	fwrite ($arquivo,"Telefone: ".$telefone);
	fwrite ($arquivo,"Cidade: ".$cidade);
	fclose ($arquivo);
	echo "Dados salvos no arquivo de texto!"
?>
<link rel="stylesheet" href="css/style_info_on.css">