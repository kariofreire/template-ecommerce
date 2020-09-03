<?php
	
	ini_set("display_errors", 1);
	error_reporting(E_ALL | E_PARSE | E_WARNING);

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