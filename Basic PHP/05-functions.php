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

	echo "\n\n";

	// função com parâmetro por referência