<?php
	namespace Tilibra\Lib;

	class Funcionario extends Pessoa {
		public $matricula;

		public function __construct($mat) {
			$this->matricula = $mat;
		}
	}