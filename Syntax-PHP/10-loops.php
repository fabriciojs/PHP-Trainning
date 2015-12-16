<?php
	// loops
	// contar até 10
	// for
	echo "for\n";
	for ($i = 0; $i < 10; $i++) {
		echo $i, "\n";
	}

	// while
	echo "while\n";
	$i = 0;
	while ($i < 10) {
		echo $i, "\n";
		$i++;
	}

	// foreach
	echo "foreach\n";
	$arr = range(0, 9); // cria array de range definido
	foreach ($arr as $key => $value) {
		echo $value, "\n";
	}
