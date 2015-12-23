<?php
	namespace Treinamento;

	$p = new \Tilibra\Pessoa;

	var_dump($p);

	// - uso de namespace para arquivo todo
	// - corrigir erro ao acessar Tilibra\Pessoa
	// 
	// - verificar se classe existe

	var_dump(class_exists('Pessoa'));
	var_dump(class_exists('\Tilibra\Pessoa'));
	var_dump(class_exists('\Dev\Pessoa'));
