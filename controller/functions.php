<?php
	
	ini_set("display_errors", 1);
	error_reporting(E_ALL | E_PARSE | E_WARNING);

	/* Função para verificar se o produto está Adicionado ao cart */
	function verifyProductInCart($idProduct, $statusSession) {
		if ($statusSession == "true") {
			return in_array($idProduct, $_SESSION["cart"]) ? "true" : "false";
		}else {
			return "false";
		}
	}

	/* Função para zerar carrinho */
	function zeraCarrinho() {
		unset($_SESSION["cart"]);
	}

	/* Função para verificar quantos produtos existe no carrinho */
	function qntProdCart() {
		return isset($_SESSION["cart"]) ? count($_SESSION["cart"]) : "0";
	}

	/* Função para adicionar produto no carrinho */
	function add_cart($id_product, $statusSession) {
		// Verifica se existe produtos no carrinho
		if ($statusSession == "false") {
			// Armazena o primeiro produto no carrinho
			$dataProduto = array ($id_product);

			// Salva o produto na session cart
			$_SESSION["cart"] = $dataProduto;
		}else {
			// Armazena o produto atual no novo array
			$dataProduto = array ($id_product);

			// Verifica a quantidade de produtos
			$qntProdutos = count($_SESSION["cart"]);

			// Armazena os produtos antigos no novo array de produtos
			for ($i = 0; $i < $qntProdutos; $i++) {
				$dataProduto[] = $_SESSION["cart"][$i];
			}

			// Armazena o novo produto com os antigos produtos na nova session
			$_SESSION["cart"] = $dataProduto;
		}

		# Retorna quantidade de produtos no carrinho
		return count($_SESSION["cart"]);
	}

	function page_content() {
		$url = getURL();		

		switch ($url) {
			# Page Home
			case 'home':
				include_once("view/pages/home.php");
			break;

			# Page Detail
			case 'detail':
				include_once("view/pages/detail.php");
			break;
			
			# Page 404
			default:
				include_once("view/pages/404.php");
			break;
		}
		
	}

	function getURL() {
		if (isset($_GET["page"])) {
			$url = $_GET["page"] ? $_GET["page"] : "home";
		}else {
			$url = "home";
		}

		return $url;
	}

	function page_layout() {
		$urlAtual = getURL();
		include_once("model/config.php");
		include_once("view/pages/template.php");
	}

	function routes($protocolo, $diretorio) {
		$project_index = $protocolo."://".$_SERVER['SERVER_NAME']."/".$diretorio;
		return $project_index;
	}

?>