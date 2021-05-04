<?php

$conexao = mysqli_connect("127.0.0.1:3307", "root", "", "site_info_on");

if (!$conexao) {
	echo "Error: Unable to connect to MySQL.".PHP_EOL;
        echo "Debugging errno: ".mysqli_connect_errno().PHP_EOL;

	echo "Debugging error: ".mysqli_connect_error().PHP_EOL;

        exit;

}

?>