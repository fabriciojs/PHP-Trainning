<?php
	// função é um tipo! e pode ser guardada
	// em uma variável

	$func = function(&$param) {
		// aumenta 10% o valor
		$param *= 1.1;
	};

	$value = 55;

	$func($value);

	echo $value, "\n\n";

	// usado como callback

	function doSomething($callback) {
		echo "faz algo...\n";
		// ...
		echo "e ao fim, chama o callback\n";
		$callback();
	}

	doSomething(function() {
		echo "callback executado!\n";
	});
