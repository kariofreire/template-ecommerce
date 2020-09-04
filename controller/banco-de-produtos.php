<?php
	
	function productRecomended() {
		$dados["quantidades"] = 7;
		$dados["nomes"] = array ("SAM", "THAY", "NAT", "JAM", "GI", "ALE", "JANA");
		$dados["precos"] = array ("00.00", "00.00", "00.00", "00.00", "00.00", "00.00", "00.00");
		$dados["pais"] = array ("RUSSIA", "LONDON", "BRASIL", "MEXICO", "USA", "CANADA", "CHILE");
		$dados["imagens"] = array ("planta_01.jpg", "planta_02.jpg", "planta_04.jpg", "planta_05.jpg", "planta_06.jpg", "planta_01.jpg", "planta_02.jpg");

		return $dados;
	}

	function productFeatured() {
		$dados["quantidades"] = 3;
		$dados["nomes"] = array ("SAM", "THAY", "NAT");
		$dados["precos"] = array ("00.00", "00.00", "00.00");
		$dados["pais"] = array ("RUSSIA", "LONDON", "BRASIL");
		$dados["imagens"] = array ("planta_01.jpg", "planta_02.jpg", "planta_04.jpg");

		return $dados;
	}

?>