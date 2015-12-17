<?php
	// trait é um trecho de código
	trait AttrNome {
		public function setNome($n) {
			$this->nome = $n;
		}

		public function getNome() {
			return $this->nome;
		}
	}

	// é como "copiar-colar" o código
	class Pessoa {
		use AttrNome;
	}

	$p = new Pessoa;
	$p->setNome('Mário');

	var_dump($p);

	// - utilidade vem de relações de objetos onde
	//   o princípio da herança única acaba gerando
	//   contradições;
