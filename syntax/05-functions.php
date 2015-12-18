<?php
	// declaração de função
	function helloWorld() {
		echo "Hello World";
	}

	helloWorld();

	echo "\n\n";

	// função com parâmetro por valor
	function hello($world) {
		echo "Hello $world";
	}

	hello("world");

	// argumento com valor padrão!
	// function hello($world = 'World') {
	// 	echo "Hello $world";
	// }

	// hello("world");

	echo "\n\n";

	// função com parâmetro por referência
	function helloRef(&$world) {
		$world = '('.$world.')';
		echo "Hello $world";
	}

	$world = "world";
	helloRef($world);

	echo "\n\n";
	echo $world;

	echo "\n\n";

	// retornando valor
	function fatorial($n) {
		if ($n == 1 || $n == 0) {
			return 1;
		} else {
			// recursividade
			return $n * fatorial($n - 1);
		}
	}

	echo "fatorial de 6: ", fatorial(6);

	echo "\n\n";
