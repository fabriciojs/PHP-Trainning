<?php
	require '05-autoloading.php';

	/**
	 * Exercícios 02
	 *
	 * 	Objetivo: construir um script com exibição de HTML,
	 * 	formulário, entrada de dados e processamento. Acessar
	 * 	este script pelo navegador. Tudo fazendo uso de classes
	 * 	e objetos.
	 *
	 * O que vamos fazer:
	 * 	- encapsular a entrada de dados numa classe (Input)
	 * 	- criar classe para geração de um formulário em HTML
	 * 		- nome
	 * 		- email
	 * 		- mensagem
	 * 		(HtmlBuilder)
	 * 	- validar dados inseridos
	 * 		- criar classes/métodos necessários
	 * 	- utilizar Exception para tratar erros
	 * 	- criar as classes no namespace Tilibra\Lib,
	 * 	  aproveitando o autoloader recém criado
	 */

	use \Tilibra\Lib\Input;
	use \Tilibra\Lib\HtmlElement;
	use \Tilibra\Lib\TextNode;


	$div = new HtmlElement('div');
	$div->setAttr('class', 'form-control');

	$form = new HtmlElement('form');

	$form
		->setAttr('action', '?')
		->setAttr('method', 'POST');

	$div->append($form);

	// <label>Text</label>
	$label = new HtmlElement('label');

	$label->append(new TextNode("Nome:"));

	$form->append($label);
?>
<html lang="en">
<head>
	<title>Treinamento PHP Microsoul - Exercício 02</title>
</head>
<body>
	<div>
		<h1>Treinamento PHP</h1>
		<br>
		<h2>Exercício 02</h2>
		<div>
			<?php
				echo $div;
			?>
		</div>
	</div>
</body>
</html>