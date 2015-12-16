<?php
	// arrays
	// em PHP arrays são sempre mapas

	// para inicializar um array:

	$arr = array();

	// ou

	$arr = [];  // síntaxe permitida desde 5.4

	// operação 'append'
	$arr[] = 'valor 1'; // adiciona no fim do array

	$arr[] = 'valor 2';

	echo "arr:\n";
	print_r($arr); // exibe o array em forma de debug

	// * índices numéricos começam em 0

	$map = [];

	$map['valor 1'] = 0;
	$map['valor 2'] = 1;

	echo "map:\n";
	print_r($map);
