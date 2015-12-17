<?php
	echo "<pre>";

	// vamos ver o que existe na variável
	var_dump($_COOKIE);

	if (empty($_COOKIE['chave'])) {
		// nome do cookie; valor; prazo de validade; path; domínio; https; httpOnly
		setcookie('chave', 'valor', time()+60, '/', 'php-dev.tilibra.com.br', false, true);
	}

	setcookie('__utmz', '', time()-1);