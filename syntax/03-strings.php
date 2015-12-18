<?php
	// existem duas notações principais para string's
	// literais

	$strVar = "string não literal";

	$strVar = 'string literal';

	// a diferença entre elas é:
	$literal = "UOT?";

	$strVar = "string não $literal";
	echo $strVar, "\n";

	$strVar = 'string $literal';
	echo $strVar, "\n";

	// concatenação é feita pelo operador .
	$strVar = "string" . " " . "concatenada";
	echo $strVar;

	// funções úteis: http://php.net/manual/en/ref.strings.php

	// strtoupper, strpos, substr, trim, strtolower, strcmp...