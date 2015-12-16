<?php
	// var_dump - exibe qualquer variável em forma de debug
	echo "var_dump\n";
	$var = 1;
	var_dump($var);

	// isset - diz se a variável ou posição de array
	// existe (se foi alocada)
	echo "isset\n";
	var_dump(isset($var));
	var_dump(isset($other_var));

	// empty - diz se a variável está "vazia" (muito útil)
	//         o conceito de vazio varia pelo tipo da variável
	echo "empty\n";

	$var = "not empty";
	var_dump(empty($var)); // não vazio

	$var = "";
	var_dump(empty($var)); // vazio

	$var = 0;
	var_dump(empty($var)); // vazio

	$var = 1;
	var_dump(empty($var)); // não vazio

	$var = [];
	var_dump(empty($var)); // vazio

	$var[] = [''];
	var_dump(empty($var)); // não vazio


	// in_array - diz se um elemento existe dentro do array
	echo "in_array\n";

	$arr = [5, 9, 10];
	var_dump(in_array(10, $arr)); // existe
	var_dump(in_array(50, $arr)); // não existe

	// time - retorna o timestmap Unix
	echo "time\n";

	var_dump(time());

	// date - retorna a data/hora atual, no formatato especificado
	// http://php.net/manual/en/function.date.php
	echo "date\n";

	var_dump(date('Y-m-d H:i:s'));
	var_dump(date('d/m/Y H:i:s'));
