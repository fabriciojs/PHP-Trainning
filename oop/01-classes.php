<?php
	// classes

	// classe padrão (standard class)
	// Object do Java; object do Javascript
	$obj = new strClass;

	print_r($obj);

	// declaração de uma classe

	class Pessoa {
		// atributo (membro)
		public $nome;
		public $idade;

		// método
		public function getDescricao() {
			return "{$this->nome}, {$this->idade} anos.";
		}
	}

	$joao = new Pessoa;
	$joao->nome = 'João';
	$joao->idade = 12;

	echo $joao->getDescricao(), "\n";

	// - uso de variaveis dinâmicas para acessar membros/métodos
	// - entender visibilidade de atributos e métodos
	// - encapsular atributos
	// - adicionar construtor para inicializar nome
	// - tornar métodos set encadeáveis
	// - criar classe Funcionario que herda Pessoa
	// - criar método que retorna o ano de nascimento
	// - adicionar funcionalidades na classe Funcionario
	//    - atributo Matricula
	//    - atributo Cargo
	//    - validar idade para maior de 18 anos
	// - métodos 'final'
