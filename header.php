<?php
/**
 * Created by PhpStorm.
 * User: Lucas Augusto
 * Date: 21/03/2018
 * Time: 13:10
 */
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Theme WordPress</title>
	<?= wp_head() ?>
</head>
<body <?= body_class() ?>>
<header class="headerMain row">
	<div class="barra-topo">
		<div class="redes-sociais">
			Social
		</div>
		<div class="pesquisa">
			Pesquisa
		</div>
	</div>
	<div class="area-menu">
		<div class="logo">
			Logo
		</div>
		<div class="menu">
			Menu
		</div>
	</div>
</header>
