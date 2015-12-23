<?php
	// classes
	date_default_timezone_set('America/Sao_Paulo');
	// classe padrão (standard class)
	// Object do Java; object do Javascript

	// declaração de uma classe
	
	ini_set('display_errors', 1);
	error_reporting(\E_ALL);

	abstract class Pessoa {

		const ESPECIE = 'humano';

		public static $planeta = '';

		public static function Planeta() {
			return self::$planeta;
		}

		// atributo (membro)
		protected $nome;
		protected $idade;

		/**
		 * Método construtor da classe
		 */
		public function __construct($nome = null) {
			$this->setNome($nome);
		}

		public final function setNome($nome) {
			if (is_string($nome)) {
				$this->nome = $nome;
			}

			return $this;
		}

		public function setIdade($idade) {
			if (is_int($idade)) {
				$this->idade = $idade;
			}

			return $this;
		}

		// método
		public function getDescricao() {
			return "{$this->nome}, {$this->idade} anos.";
		}

		abstract public function idioma();
	}

	class Funcionario extends Pessoa {
		protected $matricula;
		protected $cargo;

		public function setMatricula($matricula) {
			if (is_int($matricula)) {
				$this->matricula = $matricula;
			}
		}

		public function setCargo($cargo) {
			if (is_string($cargo)) {
				$this->cargo = $cargo;
			}
		}

		public function setIdade($idade) {
			if (is_int($idade) && $idade >= 18) {
				$this->idade = $idade;
			}

			return $this;
		}

		public function anoNascimento() {
			return date('Y') - $this->idade;
		}

		public function idioma() {
			return 'pt-br';
		}
	}

	echo Funcionario::ESPECIE, "<br>";

	$fabio = new Funcionario();
	echo $fabio
		->setNome("Fabio")
		->setIdade(31)
		->getDescricao();

	echo "<br>";

	echo "Ano nascimento: ", $fabio->anoNascimento();

	echo "\n";

	Pessoa::$planeta = "Terra";

	echo Pessoa::Planeta();

	echo "\n";
	// - uso de variaveis dinâmicas para acessar membros/métodos
	// - entender visibilidade de atributos e métodos
	// - encapsular atributos
	// - tornar métodos set encadeáveis
	// - adicionar construtor para inicializar nome
	// - criar classe Funcionario que herda Pessoa
	// - criar método que retorna o ano de nascimento
	// - adicionar funcionalidades na classe Funcionario
	//    - atributo Matricula
	//    - atributo Cargo
	//    - validar idade para maior de 18 anos
	// - métodos 'final', 'abstract'
