 <?php
    // toda linha de comando termina com ;

    // variáveis: toda variável inicia com $

	$variable = 1;    // int

	$variable = 1.0;  // float

	$variable = "1";  // string

	$variable = true; // bool

	$variable = null; // NULL

	$variable = new StdClass; // Object

	// os tipos são dinâmicos, ou seja, podem
	// mudar, como exemplificado acima

    // se o arquivo possui apenas PHP, não é necessário
    // fechar a tag PHP

	// int
	$var = 1;

	$var++; // incrementa

	$var--; // decrementa

	// case sensitive
	$var = 10;
	$VAR = 20;

	echo $var, ' ', $VAR, "\n";

	// constantes!
	define('MINHA_CONSTANTE', 100);

	echo MINHA_CONSTANTE, "\n";
