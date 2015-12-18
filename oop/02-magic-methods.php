<?php
	// classes podem possuir métodos mágicos!

	class Pessoa {
		private $nome;
		private $idade;
	}

	$jose = new Pessoa;
	$jose->nome = "José";

	echo $jose->nome, "\n";

	// - criar método para alimentar atributos privados
	// - criar método para ler atributos privados
