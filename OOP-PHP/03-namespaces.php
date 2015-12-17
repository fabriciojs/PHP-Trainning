<?php
	// namespaces - são os "pacotes"
	namespace Tilibra {
		class Pessoa {
			const TIPO = 'pessoa';
		}

		$p = new Pessoa;

		var_dump($p);

		$p = new \Tilibra\Pessoa;

		var_dump($p);
	}

	namespace Dev {
		class Pessoa {
			const TIPO = 'dev';
		}

		$p = new Pessoa;

		var_dump($p);

		$p = new \Dev\Pessoa;

		var_dump($p);
	}


	// - acessar Tilibra/Pessoa dentro de Dev
	// - utilizar 'use' para criar apelido
