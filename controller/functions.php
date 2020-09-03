<?php
	
	ini_set("display_errors", 1);
	error_reporting(E_ALL | E_PARSE | E_WARNING);

	function zeraCarrinho() {
		unset($_SESSION["cart"]);
	}

	function add_cart($id_product, $statusSession) {
		/* Função para adicionar produto no carrinho */

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