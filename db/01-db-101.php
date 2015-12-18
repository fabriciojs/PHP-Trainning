<?php
	// acessar e utilizar o banco de dados
	// 
	// procurar documentação PHP Extension OCI8

	$conn = oci_connect('vendas', 'xpto11tb', '//192.168.1.48:1521/idev10g');

	$stid = oci_parse($conn, 'select tablespace_name, table_name from user_tables');

	$res = oci_execute($stid);

	var_dump($res);
	// bool(true)

	var_dump($stid);
	// resource(5) of type (oci8 statement)

	$row = oci_fetch_array($stid);
	print_r($row);
	// Array
	// (
		// [0] => VENDASSSD
		// [TABLESPACE_NAME] => VENDASSSD
		// [1] => GUIDE_LOG
		// [TABLE_NAME] => GUIDE_LOG
	// )

	$row = oci_fetch_array($stid);
	print_r($row);
	// Array
	// (
		// [0] => VENDASSSD
		// [TABLESPACE_NAME] => VENDASSSD
		// [1] => REFERENCIA_FONTE
		// [TABLE_NAME] => REFERENCIA_FONTE
	// )

	// !!! MUITO IMPORTANTE !!!
	oci_free_statement($stid);
	oci_close($conn);
