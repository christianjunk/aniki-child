<?php

function child_theme_slug_setup() {
	$domain = 'aniki';
	// wp-content/languages/theme-name/de_DE.mo
    load_child_theme_textdomain( $domain, get_stylesheet_directory() . '/languages' );
    // wp-content/themes/child-theme-name/languages/de_DE.mo
	load_theme_textdomain( $domain, get_stylesheet_directory() . '/languages' );
	// wp-content/themes/theme-name/languages/de_DE.mo
	load_theme_textdomain( $domain, get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'child_theme_slug_setup' );

function child_theme_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-theme-css', get_stylesheet_directory_uri() .'/style.css' , array('parent-style'));
}
add_action( 'wp_enqueue_scripts', 'child_theme_styles' );

?>

