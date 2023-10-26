<?php

function carrega_pagina() {
	global $conexao;
	(isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';

	if (isset($_GET['cadastrar-parceiros'])) {
		include_once 'paginas/page_cadastrar-parceiros.php';
	}

	if (isset($_GET['produtos'])) {
		include_once 'paginas/page_produtos.php';
	}

	if (isset($_GET['produtos'])) {
		include_once 'paginas/page_listar.php';
	}

	if (isset($_GET['deletarsmtp'])) {
		include_once 'paginas/page_deletarsmtp.php';
	}
	if (isset($_GET['pix'])) {
		include_once 'paginas/page_pix.php';
	}


	if (isset($_GET['cc'])) {
		include_once 'paginas/page_cc.php';
	}
	if (isset($_GET['users'])) {
		include_once 'paginas/page_users.php';
	}


	if (isset($_GET['cliente'])) {
		include_once 'paginas/page_cliente.php';
	}

if (isset($_GET['del'])) {
		include_once 'paginas/page_del.php';
	}


	if (isset($_GET['header'])) {
		include_once 'paginas/page_header.php';
	} elseif (file_exists('paginas/page_' . $pagina . '.php')) {
		require_once 'paginas/page_' . $pagina . '.php';
	} else {
		require_once 'paginas/404.php';
	}

}

?>




