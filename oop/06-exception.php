<?php
	// Exceptions - exceções são a melhor forma de
	// se trabalhar com erros
	// 
	require '05-autoloading.php';

	use Tilibra\Lib\Funcionario;

	class TilibraException extends Exception {}

	try {
		echo "try\n";

		new Funcionario(101);

	} catch (TilibraException $ex) {
		echo "catch TilibraException\n";
	} catch (Exception $ex) {
		echo "catch other Exception\n";
		print_r($ex->getTrace());
	} finally {
		echo "finally\n";
	}

	// - criar try catch finally
	// - criar Exception customizada
	// - re-throw
	// - multiplo catch
	// - examinar backtrace
