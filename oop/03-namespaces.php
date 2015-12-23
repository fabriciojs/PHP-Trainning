<?php
	// namespaces - são os "pacotes"
	namespace Tilibra {
		class Pessoa {
			const TIPO = 'pessoa';
		}
	}

	namespace Dev {
		class Pessoa extends \Tilibra\Pessoa {
			const TIPO = 'dev';
		}
	}


	// - acessar Tilibra/Pessoa dentro de Dev
	// - utilizar 'use' para criar apelido
