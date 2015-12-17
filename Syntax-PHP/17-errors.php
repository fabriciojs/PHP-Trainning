<?php
	// captura erros
	set_error_handler(function($level, $msg, $file, $line, $context) {
		echo "ERROR level: $level, msg: $msg, file: $file, line: $line\n";

		// echo "ERROR context: ";
		// print_r($context);
		// echo "\n";
	});

	echo $var_nao_existe; // notice

	include 'file_not_exists.php'; // warning

	require 'file_not_exists.php'; // fatal
