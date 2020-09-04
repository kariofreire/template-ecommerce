<?php
	
	# Ativa a Session
	session_start();

	# Inclui arquivo de Functions
	include_once("functions.php");

	# Verifica se existe session Cart
	$statusSession = isset($_SESSION["cart"]) ? "true" : "false";

	# Define o ID do Produto
	$idProduct = $_POST["produtoID"];

	# Verifica se o produto está no cart
	$statusProduct = verifyProductInCart($idProduct, $statusSession);

	# Se não estiver no carrinho adiciona no carrinho
	if ($statusProduct == "false") {
		# Adiciona o produto no carrinho (Retorna quantidade de produtos)
		echo add_cart($idProduct, $statusSession);
	}else {
		# Retorna a Quantidade de Produtos no Cart
		echo qntProdCart();
	}

	# Zera carrinho
	#zeraCarrinho();

?>