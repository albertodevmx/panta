<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bootstrap Custom Start</title>

	<script src="https://kit.fontawesome.com/ed16a084b6.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

	<link rel="stylesheet" href="./assets/css/style.css">
</head>

<body <?php if ( $_SERVER['REQUEST_URI'] == "/index.php" | $_SERVER['REQUEST_URI'] == "/" | $_SERVER['REQUEST_URI'] == "" ) { echo 'class="bg-secondary"'; } ?>>


	<nav id="portada" class="navbar navbar-expand-lg navbar-dark fixed-top shadow d-flex align-items-start mi-nav-bar bg-light<?php if ( $_SERVER['REQUEST_URI'] == "/index.php" | $_SERVER['REQUEST_URI'] == "/" | $_SERVER['REQUEST_URI'] == "" ) { echo ' portada-principal'; } ?>">
		<a class="navbar-brand" href="#" class="d-block">
			<img src="./assets/img/panta-logo.png" alt="" id="logotipo-menu" class="logotipo-menu">

			
		</a>

		<!-- <img id="logotipo" src="./img/panta-logo.png" alt="" class="logotipo"> -->

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="manufactura-aditiva.php">Manufactura Aditiva</a>
				</li>


				<li class="nav-item">
					<a class="nav-link" href="posibilidades-en-3d.php">Posibilidades en 3D</a>
				</li>
			
				
				<li class="nav-item">
					<a class="nav-link" href="maquinados.php">Maquinados</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="nosotros.php">Nosotros</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contactanos.php">Contáctanos</a>
				</li>
			</ul>
		</div>
	</nav>