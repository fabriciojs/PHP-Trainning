<?php
	// autoloading

	// na pasta lib/ existe a definição
	// do namespace Tilibra\Lib, e dentro dele, algumas
    // classes. Como fazer funcionar o seguinte trecho?

	$func = new Tilibra\Lib\Funcionario(101);

	$func->nome = 'Fábio';

	var_dump($func);

	// - conhecer SPL (Standard PHP Libraries)
	// 	  - PHP info
	//    - http://php.net/manual/en/book.spl.php
	// - carregar manualmente as classes
	// - utilizar spl_autoload_register para carregar
	//    sob demanda as classes
