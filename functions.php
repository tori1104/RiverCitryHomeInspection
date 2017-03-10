<?php

class MakespaceChild {

	function __construct(){
		add_action( 'wp_enqueue_scripts', array( $this, 'wp_enqueue_scripts' ) );
	}

	function wp_enqueue_scripts(){
		$msw_object = array(
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			'home_url' => home_url(),
			'show_dashboard_link' => current_user_can( 'manage_options' ) ? 1 : 0,
			'site_url' => site_url(),
			'stylesheet_directory' => get_stylesheet_directory_uri()
		);


		wp_enqueue_script('slick_js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js');
		wp_enqueue_script( 'theme', get_stylesheet_directory_uri() . '/scripts.min.js' );
		wp_enqueue_style('slick_js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css');
		wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Istok+Web|Montserrat|Open+Sans' );
		wp_enqueue_style( 'theme', get_stylesheet_uri() );
		wp_localize_script( 'theme', 'MSWObject', $msw_object );
	}

}

$MakespaceChild = new MakespaceChild();