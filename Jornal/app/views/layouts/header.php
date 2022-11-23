<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<link rel="apple-touch-icon" sizes="76x76" href="<?=assets('assets/img/favicon.ico')?>">
<link rel="icon" type="image/png" href="<?=assets('assets/img/favicon.ico')?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Jornal online-IPPA</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Source+Sans+Pro:400,600,700" rel="stylesheet">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<!-- Main CSS -->
<link href="<?=assets('assets/css/main.css')?>" rel="stylesheet"/>
</head>
<body>
<!--------------------------------------
NAVBAR
--------------------------------------->
<nav class="topnav navbar navbar-expand-lg navbar-light bg-menu fixed-top">
<div class="container">
	<a class="navbar-brand" href="<?='/'.APP_NAME.'/'?>"><strong>Jornal Online</strong></a>
	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="navbar-collapse collapse" id="navbarColor02" >
		<ul class="navbar-nav mr-auto d-flex align-items-center">
			<li class="nav-item">
			<a class="nav-link" href="./index.html">Início <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Sobre</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Eventos/actividades</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Política</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Entrevistas</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Motivações</a>
			</li>            
			<li class="nav-item">
			<a class="nav-link" href="#">Contacto</a>
			</li>
			
		</ul>
		<ul class="navbar-nav ml-auto d-flex align-items-center">
			<?php if (!isset($_SESSION[LOGIN])):?>
			<li class="nav-item">
				<a class="nav-link btn btn-info" href="#" data-toggle="modal" data-target="#modalLoginId">Entrar</a>
			</li>
			<?php else: ?>
			<li class="nav-item">
				<a class="nav-link" href="#">Olá, <?=$_SESSION[LOGIN]['nome']?></a>
			</li>
			<li class="nav-item">
				<a class="nav-link btn btn-danger" href="<?='/'.APP_NAME.'/usuario/logout'?>">Sair</a>
			</li>
			<?php endif;?>
		</ul>
	</div>
</div>
</nav>
<!-- End Navbar -->