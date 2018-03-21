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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:400,700" rel="stylesheet">
	<?= wp_head() ?>
</head>
<body <?= body_class() ?>>
    <header class="headerMain container-fluid">
        <div class="barra-topo row">
            <div class="redes-sociais col-md-4">
                Social
            </div>
            <div class="pesquisa col-md-8">
                Pesquisa
            </div>
        </div>
        <div class="area-menu row">
            <div class="logo col-md-3">
                Logo
            </div>
            <div class="menu-principal col-md-9 text-right">
                <?= wp_nav_menu(
                        array('theme_location', 'menu-principal')
                ) ?>
            </div>
        </div>
    </header>
