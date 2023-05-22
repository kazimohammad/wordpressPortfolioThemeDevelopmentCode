<?php 

/* Theme Supports */

add_action('after_setup_theme','kazi_portfolio_theme_supports');

function kazi_portfolio_theme_supports(){

				add_theme_support( 'menus' );
				add_theme_support( 'widgets' );
				add_theme_support( 'post-thumbnails' );
				add_theme_support( 'title-tag' );
				add_theme_support( 'post-format',array('audio','video','link','quote','image','gallery') );
				load_theme_textdomain( 'kazi_portfolio' );

			
}

/* Assets Enqueue */

add_action('wp_enqueue_scripts', 'kazi_portfolio_assets_enqueue');

function kazi_portfolio_assets_enqueue(){

			wp_enqueue_style( 'animate', get_theme_file_uri().'/css/animate.css', null , '3.0.0','all' );
			wp_enqueue_style( 'icomoon', get_theme_file_uri().'/css/icomoon.css', null , '3.0.0','all' );
			wp_enqueue_style( 'bootstrap', get_theme_file_uri().'/css/bootstrap.css', null , '3.0.0','all' );
			wp_enqueue_style( 'flexslider', get_theme_file_uri().'/css/flexslider.css', null , '3.0.0','all' );
			wp_enqueue_style( 'flaticon', get_theme_file_uri().'/fonts/flaticon/font/flaticon.css', null , '3.0.0','all' );
			wp_enqueue_style( 'carousel', get_theme_file_uri().'/css/owl.carousel.min.css', null , '3.0.0','all' );
			wp_enqueue_style( 'owl-theme', get_theme_file_uri().'/css/owl.theme.default.min.css', null , '3.0.0','all' );
			wp_enqueue_style( 'style', get_theme_file_uri().'/css/style.css', null , '3.0.0','all' );
			wp_enqueue_style( 'Quicksand','https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700' );
			wp_enqueue_style( 'Playfair','https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700');
			wp_enqueue_style( 'main', get_stylesheet_uri() );
			wp_enqueue_script( 'modernizr',get_theme_file_uri().'/js/modernizr-2.6.2.min.js',array('jquery'), true, true );


			
			wp_enqueue_script( 'jquery-min',get_theme_file_uri().'/js/jquery.min.js',array('jquery'), true, true );
			wp_enqueue_script( 'easing',get_theme_file_uri().'/js/jquery.easing.1.3.js',array('jquery'), true, true );
			wp_enqueue_script( 'bootstrap',get_theme_file_uri().'/js/bootstrap.min.js',array('jquery'), true, true );
			wp_enqueue_script( 'waypoints',get_theme_file_uri().'/js/jquery.waypoints.min.js',array('jquery'), true, true );
			wp_enqueue_script( 'flexslider-min',get_theme_file_uri().'/js/jquery.flexslider-min.js',array('jquery'), true, true );
			wp_enqueue_script( 'owl-carousel',get_theme_file_uri().'/js/owl.carousel.min.js',array('jquery'), true, true );
			wp_enqueue_script( 'countTo',get_theme_file_uri().'/js/jquery.countTo.js',array('jquery'), true, true );
			wp_enqueue_script( 'main',get_theme_file_uri().'/js/main.js',array('jquery'), true, true );


}


/* Redux Framework */
 
 include_once 'inc/Redux/ReduxCore/framework.php' ;
 include_once 'inc/Redux/sample/config.php' ;

/* TGM Connection */
include_once 'inc/tgm/example.php';


/* Recent Blog Post Type*/
function cptui_register_my_cpts() {

	/**
	 * Post Type: Recentblogs.
	 */

	$labels = array(
		"name" => __( "Recentblogs", "kazi_portfolio" ),
		"singular_name" => __( "Recentblog", "kazi_portfolio" ),
	);

	$args = array(
		"label" => __( "Recentblogs", "kazi_portfolio" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "recent_blog", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "recent_blog", $args );

	/**
	 * Post Type: Contacts.
	 */

	$labels = array(
		"name" => __( "Contacts", "kazi_portfolio" ),
		"singular_name" => __( "contact", "kazi_portfolio" ),
	);

	$args = array(
		"label" => __( "Contacts", "kazi_portfolio" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "contact_post", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "contact_post", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


//Registration form

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$message_body= $name =$email =$phone =$message ;
	$mail_send =mail('www.abdulquaiyum@gmial.com', $message, $message_body);

	if($mail_send){
		echo 'Mail Succesfully Send';
	}else{
		echo 'Something Went Wrong !! Try Again';
	}
}




	