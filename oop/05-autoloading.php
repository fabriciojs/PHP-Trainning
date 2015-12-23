<?php
	// autoloading

	// na pasta lib/ existe a definição
	// do namespace Tilibra\Lib, e dentro dele, algumas
    // classes. Como fazer funcionar o seguinte trecho?
    
    spl_autoload_register(function($class) {
    	$pieces = explode('\\', $class);

    	$path = strtolower($pieces[1]).'/'.$pieces[2].'.php';

    	if (file_exists($path)) {
  	  		require $path;
  	  	}
    });

	// - conhecer SPL (Standard PHP Libraries)
	// 	  - PHP info
	//    - http://php.net/manual/en/book.spl.php
	// - carregar manualmente as classes
	// - utilizar spl_autoload_register para carregar
	//    sob demanda as classes
