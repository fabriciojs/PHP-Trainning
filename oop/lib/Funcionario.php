<?php
	namespace Tilibra\Lib;

	use TilibraException;

	class Funcionario extends Pessoa {
		public $matricula;

		public function __construct($mat) {
			$this->matricula = $mat;

			$this->daRuim();
		}

		private function daRuim() {
			throw new \Exception("deu ruim");
		}
	}