<?php

	header("Content-Type: text/plain");
	// // sessões
	session_start(); // inicializa uma "sessão"

	echo "ID da sessão: ", session_id(), "\n";

	// // observar info.php

	// // $_SESSION['usuario'] = 'Fábio C';

	// if (empty($_SESSION['usuario'])) {
	// 	echo "faça o login\n";
	// } else {
	// 	echo "você é o {$_SESSION['usuario']}\n";
	// }

	// // importante: mesmo requisito do cookie (header)
