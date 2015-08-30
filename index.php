<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
	<title>Tutorando - Um site em HTML e CSS</title>

	<meta http-equiv="content-language" content="pt_BR">
	<meta charset="utf-8">
	<meta name="author" content="Canal Tutorando">
	<meta name="description" content="Vídeos Aulas HTML e CSS">
	<meta name="keywords" content="sites, web, desenvolvimento,html, css">

	<!-- Importando a folha de estilo CSS para o HTML -->
	<link rel="stylesheet" type="text/css" href="css/layout.css"> 
	<link rel="shortcut icon" href="img/icon.jpg" type="image/x-icon">

</head>
<body>
<div class="container">
	<!-- MENU -->
	<div class="menu">
		<ul class="menu-top">
			<LI><a href="?l=inicio">INÍCIO</a></LI>
			<LI><a href="?l=sobre">SOBRE</a></LI>
			<LI><a href="?l=contato">CONTATO</a></LI>
		</ul>
	</div>
	<!-- MAIN -->
	<div class="main">
		<?php 
			switch (@$_GET['l']) {
				case 'inicio':
					include "home.php";
					break;
				case 'sobre':
					include "sobre.php";
					break;
				case 'contato':
					include "contato.php";
					break;
				
				default:
					include "home.php";
					break;
			}
		?>
	</div>
	
	<!-- footer -->
	<div class="footer">
		<div class="footer-box">
			<ul>
				<LI><h4>MENU</h4></LI>
				<LI><a href="#">Inicio</a></LI>
				<LI><a href="#">Sobre</a></LI>
				<LI><a href="#">Contato</a></LI>
			</ul>
		</div>
		<div class="footer-box">
			<ul>
				<LI><h4>QUEM SOMOS</h4></LI>
				<LI><a href="#">Onde estamos</a></LI>
				<LI><a href="#">Parceiros</a></LI>
				<LI><a href="#">Trabalhe Conosco</a></LI>
			</ul>
		</div>
		<div class="footer-box">
			<ul>
				<LI><h4>REDES SOCIAIS</h4></LI>
				<LI><a href="#">Twitter</a></LI>
				<LI><a href="#">Facebook</a></LI>
				<LI><a href="#">Youtube</a></LI>
			</ul>
		</div>
		<div class="copyright">
			<h5>Tutorando Vídeo Aulas HTML/CSS Copyright © 2013 - Todos os direitos reservados </h5>
		</div>
	</div>

</div>

</body>
</html>
