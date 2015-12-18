<?php
	// divisão de código em arquivos
	// o código PHP pode ser distribuídos em diversos arquivos
	// 
	// temos duas funções para trabalhar com mais de
	// um arquivo de código
	
	$var = '(variável compartilhada)';

	include '12-1-include-require.php';

	require '12-1-include-require.php';

	// existe ainda uma variação de cada um deles
	// que checa de o arquivo já foi incluído anteriormente,
	// e nesse caso não inclui de novo

	include_once '12-1-include-require.php';

	require_once '12-1-include-require.php';


	// diferença entre eles é:

	include 'arquivo_que_nao_existe.php';

	require 'arquivo_que_nao_existe.php';
