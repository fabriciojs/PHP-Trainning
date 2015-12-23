<?php
	// classes podem possuir métodos mágicos!

	class Pessoa {
		private $nome;
		private $idade;

		public function validaNome($nome) {
			return is_string($nome);
		}

		public function validaIdade($idade) {
			return is_int($idade) && $idade > 18;
		}

		public function __set($attr, $value) {
			$metodo_valida = 'valida'.ucfirst($attr);

			if (method_exists($this, $metodo_valida)) {
				if (!$this->$metodo_valida($value)) {
					return;
				}
			}

			$this->$attr = $value;
		}

		public function __get($attr) {
			return $this->$attr;
		}		
	}

	$jose = new Pessoa;

	$jose->nome = "José";
	$jose->idade = 10;

	echo "{$jose->nome}, {$jose->idade} anos.", "\n";

	// - criar método para alimentar atributos privados
	// - criar método para ler atributos privados
