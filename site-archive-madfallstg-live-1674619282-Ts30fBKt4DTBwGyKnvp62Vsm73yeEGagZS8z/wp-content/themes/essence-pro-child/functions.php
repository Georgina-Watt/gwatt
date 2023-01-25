<?php
/**
 * Essence Pro.
 *
 * This file adds functions to the Essence Pro Theme.
 *
 * @package Essence_Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/essence/
 */

// Enqueue scripts and styles
function essence_child_scripts(){
	wp_enqueue_style( 'essence-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'essence-style' ));
}
add_action( 'wp_enqueue_scripts', 'essence_child_scripts' );