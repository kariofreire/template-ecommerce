<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<title>APP</title>
	<meta charset="utf-8">
	<meta name="author" content="#">
	<meta property="og:locale" content="PT-BR">
    <meta property="og:url" content="#">
    <meta property="og:title" content="#">
    <meta name="description" content="#">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#000000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000000">
    <meta name="msapplication-navbutton-color" content="#000000">
	<link rel="shortcut icon" type="image/x-icon" href="<?= $project_index; ?>/view/assets/images/icon.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="<?= $project_index; ?>/view/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= $project_index; ?>/view/assets/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?= $project_index; ?>/view/assets/css/style.css">
</head>
<body id="body-app" name-page="<?= $urlAtual; ?>">
	<!-- #Início# Nav Left Vertical APP -->
	<div class="sidenav">
		<a href="javascript:void(0)" class="closebtn closeNavVertical">&times;</a>
		<a href="meus-pedidos">
			<i class="material-icons">add_shopping_cart</i>&nbsp;&nbsp;Meus Pedidos
		</a>
		<a href="historico-de-pedidos">
			<i class="material-icons">access_time</i>&nbsp;&nbsp;Histórico
		</a>
		<a href="suporte">
			<i class="material-icons">headset_mic</i>&nbsp;&nbsp;Suporte
		</a>
		<a href="sair">
			<i class="material-icons">lock</i>&nbsp;&nbsp;Sair
		</a>
	</div>
	<!-- #Fim# Nav Left Vertical APP -->

	<!-- #Início# Nav APP -->
	<div class="header-app">
		<nav class="nav">
			<a class="nav-link active openNavVertical">
				<i class="material-icons navIcon">short_text</i>
			</a>
		</nav>
		<div class="header-conteudo">
			<div class="float-left">
				<h3>Hi Uishopy!</h3>
			</div>
			<div class="float-right">
				<img src="view/assets/images/android.png" alt="Logo App" class="rounded-circle profile">
			</div>
		</div>
		<div class="header-search">
			<input type="search" class="form-search" placeholder="Search">
		</div>
	</div>
	<!-- #Fim# Nav APP -->

	<?php page_content(); ?>

	<!-- #Início# Bar Nav -->
	<div class="footer-app">
		<div>
			<a class="iconeMenu home" title="Home" href="home">
				<i class="material-icons">home</i>
			</a>
		</div>
		<div>
			<a class="iconeMenu cart" title="Cart" href="cart">
				<i class="material-icons">shopping_cart</i>
			</a>
		</div>
		<div>
			<a class="iconeMenu profile" title="Profile" href="profile">
				<i class="material-icons">person</i>
			</a>
		</div>
	</div>
	<!-- #Fim# Bar Nav -->
	
	<script type="text/javascript" src="<?= $project_index; ?>/view/assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?= $project_index; ?>/view/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= $project_index; ?>/view/assets/js/owl.carousel.js"></script>
	<script type="text/javascript" src="<?= $project_index; ?>/view/assets/js/app.js"></script>
</body>
</html>