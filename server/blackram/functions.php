<?php 

add_action( 'wp_enqueue_scripts', function () {

        // <script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"> </script>
        // <script type="text/javascript" src="assets/js/script.js"> </script>


	wp_enqueue_style( 'googleapis','https://fonts.googleapis.com' );
    wp_enqueue_style( 'gstatic','https://fonts.gstatic.com' );
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap' );
    wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/style.css' );
    wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/style.css' );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri().'/assets/js/jquery-3.6.0.min.js');

	wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'jquery', get_template_directory_uri().'/assets/js/jquery-3.6.0.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'form_name', get_template_directory_uri() . '/assets/js/form_name.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'mail_script', get_template_directory_uri() . '/assets/js/mail_script.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'popup-sticky', get_template_directory_uri() . '/assets/js/popup-sticky.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'header', get_template_directory_uri() . '/assets/js/header.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'fone', get_template_directory_uri() . '/assets/js/fone.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'maps', get_template_directory_uri() . '/assets/js/maps.js', array('jquery'), 'null', true );

});

add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo');
add_theme_support( 'title-tag' );
?>