<?php
	
	ini_set('memory_limit', '2048M');


	// No FTP
	define('FS_METHOD', 'direct');

	# Require
	####################################################
	// Mail
	require_once "mail/mail.php";
	// Configs
	foreach(glob(get_template_directory() . "/configs/*.php") as $filename)
    require_once $filename;

	####################################################
	
	// CONSTANTES
	DEFINE('assetsurl', get_template_directory_uri());
	DEFINE('thumbnail_default', get_template_directory_uri() . "/assets/img/padrao-thumbnail.jpg");

	####################################################
	
	function load_assets() {
	
		// My LIB
		wp_enqueue_script( 'app_js',  assetsurl . '/dist/bundle.js', '', '',true);
		wp_enqueue_style( 'app_css', assetsurl . '/dist/bundle.css');

	}
	add_action( 'wp_enqueue_scripts', 'load_assets' );

	####################################################

	function register_my_menus() {
		register_nav_menus(
			array(
			  'sub-menu' => __( 'Sub Menu' )
			)
		);
		register_nav_menus(
			array(
			  'header-menu' => __( 'Header Menu' )
			)
		);
	}
	add_action( 'init', 'register_my_menus' );

	####################################################
	
	// Registro das suas widgets
	if ( function_exists('register_sidebar') ){
	    register_sidebar(array(
	        'name' => __( 'Widget 1'),
	        'id' => 'widget-1',
	        'description' => __( ''),
	        'before_title' => '<h1>',
	        'after_title' => '</h1>',
	    ) );
	}

	####################################################
	function get_menu_obj( $location ) {
	    if( empty($location) ) return false;

	    $locations = get_nav_menu_locations();
	    if( ! isset( $locations[$location] ) ) return false;

	    $menu_obj = get_term( $locations[$location], 'nav_menu' );

	    return $menu_obj;
	}
	####################################################
	
	// Tamanho da largura das imagens.
	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 480, 350, true );
		
	}