<?php
/**
 * Created by PhpStorm.
 * User: Lucas Augusto
 * Date: 21/03/2018
 * Time: 13:26
 */

function carrega_scripts() {
	wp_enqueue_style('general', get_template_directory_uri() . '/assets/css/general.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'carrega_scripts');
