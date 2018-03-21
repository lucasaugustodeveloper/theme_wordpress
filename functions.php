<?php
/**
 * Created by PhpStorm.
 * User: Lucas Augusto
 * Date: 21/03/2018
 * Time: 13:26
 */

function carrega_scripts() {
//    stylesheets
	wp_enqueue_style('general', get_template_directory_uri() . '/assets/css/general.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all');

//	javascripts
	wp_enqueue_script('template', get_template_directory_uri() . '/assets/js/template.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true);
}
add_action('wp_enqueue_scripts', 'carrega_scripts');

// Function menu
register_nav_menus(
    array(
        'menu-principal' => 'Menu Principal do Topo',
        'menu-rodape' => 'Menu Secundário do Rodapé'
    )
);
