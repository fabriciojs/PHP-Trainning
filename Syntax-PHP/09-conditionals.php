<?php
	// condicional
	$media = 10;

	if ($media >= 6) {
		echo "aprovado";
	} else {
		echo "reprovado";
	}

	echo "\n";

	// operadores lógicos: 
	// 	&&  - AND
	// 	||  - OR
	// 	and - AND
	// 	or  - OR
	// 	!   - NOT

	$media = 4;
	$fim_periodo = true;

	if ($media < 5 && $fim_periodo) {
		echo "fazer final";
	} elseif ($media < 5) {
		echo "fazer recuperação";
	} else {
		echo "aprovado";
	}

	echo "\n";

	// diferença entre &&, || e AND, OR é a precedência!!!
	// operação de atribuição!

	$value = true && false;
	var_dump($value);
	$value = true AND false;
	var_dump($value);

	// switch
	$var = 'switch';

	switch ($var) {
		case 'for':
			echo '$var é for';
			break;

		case 'switch':
			echo '$var é switch';
			break;

		default:
			echo '$var é outra coisa';
			break;
	}
