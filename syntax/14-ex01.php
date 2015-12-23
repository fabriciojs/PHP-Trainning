<?php
	/**
	 * Exercícios 01
	 *
	 * 	* Utilizar documentação php.net para ajuda
	 * 			Google: php <problem>
	 *
	 * 	Objetivo: construir um script com exibição de HTML,
	 * 	formulário, entrada de dados e processamento. Acessar
	 * 	este script pelo navegador.
	 *
	 * O que vamos fazer:
	 *  - examinar e entender as superglobais
	 *  	$_SERVER
	 *  	$_GET
	 * 	- aprender sobre a entrada de dados por $_GET
	 * 	- criar um formulário em HTML
	 * 		- nome
	 * 		- email
	 * 		- mensagem
	 * 	- aprender sobre codificação para URL
	 * 	- aprender sobre a entrada de dados por $_POST
	 * 	- apresentar dados inseridos
	 * 	- validar dados inseridos
	 * 		- utilizar funções de str*, preg
	 */
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<title>Treinamento PHP Microsoul - Exercício 01</title>

	<link rel="stylesheet" type="text/css" href="https://goo.gl/tRt9DE">
    <script src="https://goo.gl/Ze3rcq"></script>
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
					<input name="nome" type="text">
				</p>
				<p>
					<label>Email:</label>
					<input name="email" type="text">
				</p>
				<p>
					<label>Mensagem:</label>
					<textarea name="mensagem"></textarea>
				</p>
				<input type="submit" value="Enviar">
			</form>
		</div>

		<div>
			<?php
				// Nome: só letras e espaço, não vazio
			?>
			<p>
				Nome: <b><?= $_POST['nome'] ?></b>
			</p>
			<p>
				Email: <b><?= $_POST['email'] ?></b>
			</p>
			<p>
				Mensagem: <b><?= $_POST['mensagem'] ?></b>
			</p>
		</div>
	</div>
</body>
</html>