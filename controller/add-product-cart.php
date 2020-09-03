<?php
	
	# Ativa a Session
	session_start();

	# Inclui arquivo de Functions
	include_once("functions.php");

	# Verifica se existe session Cart
	$statusSession = isset($_SESSION["cart"]) ? "true" : "false";

	# Adiciona o produto no carrinho (Retorna quantidade de produtos)
	echo add_cart($_POST["produtoID"], $statusSession);

	# Zera carrinho
	#zeraCarrinho();

?>