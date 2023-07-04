<?php
/**
 * Porcupine functions and definitions
 */

if ( ! function_exists( 'porcupine_support' ) ) {

	// Sets up theme defaults and registers support for various WordPress features.
	function porcupine_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}
}
add_action( 'after_setup_theme', 'porcupine_support' );

if ( ! function_exists( 'porcupine_styles' ) ) {
	// Enqueue styles.
	function porcupine_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'porcupine-style',
			get_template_directory_uri() . '/assets/css/theme.min.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Add styles inline.
		wp_add_inline_style( 'porcupine-style', porcupine_get_font_face_styles() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'porcupine-style' );

	}
}
add_action( 'wp_enqueue_scripts', 'porcupine_styles' );

if ( ! function_exists( 'porcupine_editor_styles' ) ) {
	// Enqueue editor styles.
	function porcupine_editor_styles() {
		// Add styles inline.
		wp_add_inline_style( 'wp-block-library', porcupine_get_font_face_styles() );

		add_editor_style(
			get_template_directory_uri() . '/assets/css/theme.min.css'
		);
	}
}
add_action( 'admin_init', 'porcupine_editor_styles' );

// Get font face styles.
if ( ! function_exists( 'porcupine_get_font_face_styles' ) ) {
	function porcupine_get_font_face_styles() {
		return "
		@font-face{
			font-family: 'Montserrat';
			font-weight: 100;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Montserrat-VariableFont_wght.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Montserrat';
			font-weight: 200;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Montserrat-VariableFont_wght.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Montserrat';
			font-weight: 300;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Montserrat-VariableFont_wght.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Montserrat';
			font-weight: 400;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Montserrat-VariableFont_wght.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Montserrat';
			font-weight: 500;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Montserrat-VariableFont_wght.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Montserrat';
			font-weight: 600;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Montserrat-VariableFont_wght.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Montserrat';
			font-weight: 700;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Montserrat-VariableFont_wght.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Montserrat';
			font-weight: 800;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Montserrat-VariableFont_wght.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'Montserrat';
			font-weight: 900;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Montserrat-VariableFont_wght.woff2' ) . "') format('woff2');
		}
		";
	}
}

// Add script to Editor
if ( ! function_exists( 'porcupine_admin_add_scripts' ) ) {
	function porcupine_admin_add_scripts( $hook ){
		if ( 'appearance_page_porcupine' != $hook ) {
			return;
		}
		
		wp_register_style( 'porcupine-settings-css',  get_template_directory_uri() . '/assets/css/admin.min.css' , '1.0.0' );
		wp_enqueue_style( 'porcupine-settings-css');
	
	}
}
add_action( 'admin_enqueue_scripts', 'porcupine_admin_add_scripts');


// Add admin page content
get_template_part( 'inc/theme' );

// Add admin page
if ( ! function_exists( 'porcupine_create_menu' ) ) {
	add_action( 'admin_menu', 'porcupine_create_menu' );
	// Adds our dashboard menu item
	function porcupine_create_menu() {
		add_theme_page( 'Porcupine WordPress Theme', 'Porcupine', 'edit_theme_options', 'porcupine', 'porcupine_admin_theme_page' );
	}
}