<?php
	echo "<pre>";

	// vamos ver o que existe na variável

	// if (empty($_COOKIE['chave'])) {
	// 	// nome do cookie; valor; prazo de validade; path; domínio; https; httpOnly
		// setcookie('chave', 'valor', time()+60, '/', 'php-dev.tilibra.com.br', false, true);
	// }
	// 
	setcookie('fabio', 'analista', time()+309000000, '/', '.php-dev.tilibra.com.br', false, true);

	var_dump($_COOKIE);

	// remove o cookie
	// setcookie('fabio', '', time()-1);

	// cookie = header Set-Cookie: