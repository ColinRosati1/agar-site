<?php


/**
 * child theme functions
 */

// You need this as a function action call back
function popper_child_setup() {
 
 	// for langauge translation
 	load_theme_textdomain( 'popper-child', get_stylesheet_directory() . '/languages' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'secondary' => esc_html__( 'Agar Menu', 'popper-child' ),
	) );

}

// this is the hook that uses callback to call function
add_action( 'after_setup_theme', 'popper_child_setup');

