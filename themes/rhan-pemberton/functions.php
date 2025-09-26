<?php

/* Enqueue Scripts and Styles
-------------------------------------------------------------- */

function global_scripts_and_styles() {
	// Styles
	$css = get_template_directory() . '/dist/app.css';
	wp_enqueue_style( 'font-roboto', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap', false );
	wp_enqueue_style( 'font-bebas', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap', false );
	wp_enqueue_style( 'font-share-tech-mono', 'https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap', false );
	wp_enqueue_style( 'css', get_template_directory_uri() . '/dist/site.css', [], file_exists($css) ? filemtime($css) : null );
		
	// Scripts
	wp_enqueue_script('js', get_template_directory_uri() . '/dist/site.js',
	array(
		'jquery'
	), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'global_scripts_and_styles');

/* Theme support
-------------------------------------------------------------- */

add_theme_support( 'menus' );

/* Menus
-------------------------------------------------------------- */

function register_my_menus() {
	register_nav_menus(
		array(
			'main-menu' => __( 'Main Menu' )
		)
	);
}
add_action( 'init', 'register_my_menus' );

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
	// Start Level (adds opening wrapper before sub-menu <ul>)
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"sub-menu\">\n$indent\t<div class=\"sub-menu-inner\">\n";
	}

	// End Level (adds closing wrapper after sub-menu </ul>)
	function end_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "$indent\t</div>\n$indent</ul>\n";
	}
}