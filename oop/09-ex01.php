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

	$label = new HtmlElement('label');

	$label->append(new TextNode("<script>alert('oi')</script>"));

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
		<h2>Exercício 01</h2>
		<div>
			<form action="?" method="POST">
				<p>
					<label>Nome:</label>
					<?= new HtmlElement('input', [
							'name' => 'nome',
							'type' => 'text',
						]);
					?>
				</p>
				<p>
					<label>Email:</label>
					<?= new HtmlElement('input', [
							'name' => 'email',
							'type' => 'text',
						]);
					?>
				</p>
				<p>
					<label>Mensagem:</label>
					<?= (new HtmlElement('textarea', [
								'name' => 'mensagem',
							]))->append(new TextNode(''));
					?>
				</p>
				<input type="submit" value="Enviar">
			</form>
		</div>

		<div>
			<?php
				// Nome: só letras e espaço, não vazio
			?>
			<p>
				Nome: <b><?= Input::get('nome'); ?></b>
			</p>
			<p>
				Email: <b><?= Input::get('email'); ?></b>
			</p>
			<p>
				Mensagem: <b><?= Input::get('mensagem'); ?></b>
			</p>

			<?php
				// tr_php_mensagem
				
				if (!empty($_POST)) {


					// $msg = new Mensagem($_POST);

					// $msg->save();

					$conn = oci_connect(
						'aloca',
						'xpto11tb',
						'//192.168.1.48:1521/idev10g',
						'WE8ISO8859P1'
					);

					$stid = oci_parse($conn, '
						INSERT INTO TR_PHP_MENSAGEM (
							nome,
							email,
							mensagem,
							ip,
							data_criacao
						) VALUES (
							:nome,
							:email,
							:mensagem,
							:ip,
							SYSDATE
						)
					');


					$nome = utf8_decode(Input::get('nome'));
					oci_bind_by_name($stid, ':nome', $nome);
					$email = Input::get('email');
					oci_bind_by_name($stid, ':email', $email);
					$mensagem = Input::get('mensagem');
					oci_bind_by_name($stid, ':mensagem', $mensagem);

					oci_bind_by_name($stid, ':ip', $_SERVER['REMOTE_ADDR']);

					if (oci_execute($stid)) {
						?>
						<p>SUCESSO!!!</p>
						<?php
					} else {
						?>
						<p>ERROR!!!</p>
						<?php
					}

					oci_free_statement($stid);
					oci_close($conn);
				}
			?>
		</div>
	</div>
</body>
</html>