<?php
	// escopo de variáveis
	// variáveis podem ser declaradas em qualquer parte de um script

	// global
	echo "global: ";
	$var = 'global';
	echo $var, "\n";

	// local
	echo "local: ";
	function localVar() {
		$var = 'local';

		echo $var, "\n";
	}

	localVar();

	// static
	function staticVar() {
		static $var;
		$var++;

		echo $var, "\n";
	}

	echo "static: ";
	staticVar();
	echo "static: ";
	staticVar();

	// acessar global em função
	echo "usa global: ";
	function usaGlobal() {
		global $var;
		echo $var, "\n";
	}

	usaGlobal();
