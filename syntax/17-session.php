<?php
	// sessões
	session_start(); // inicializa uma "sessão"

	echo "ID da sessão: ", session_id(), "\n";

	// observar info.php

	if (empty($_SESSION['usuario'])) {
		$_SESSION['usuario'] = 'logado';
	} else {
		$_SESSION['usuario'] .= 'o';
	}

	// importante: mesmo requisito do cookie (header)
