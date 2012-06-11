<?php
/*
Plugin Name: Easy to use
Plugin URI: http://web-profile.com.ua/wordpress/plugins/easy-to-use/
Description: Use your site more easy.
Version: 1.1
Author: webvitaly
Author Email: webvitaly(at)gmail.com
Author URI: http://web-profile.com.ua/wordpress/
*/


add_action( 'login_enqueue_scripts', 'easy_to_use_login_enqueue_scripts' );
function easy_to_use_login_enqueue_scripts(){
	// wp_enqueue_script('jquery');
	wp_enqueue_script( 'easy-to-use-script', plugins_url( '/js/easy-to-use.js', __FILE__ ), array('jquery'), '1.1' );
    wp_enqueue_style( 'easy-to-use-style', plugins_url( '/css/easy-to-use.css', __FILE__ ), false, '1.1', 'all' );
}

add_action('admin_enqueue_scripts', 'easy_to_use_admin_enqueue_scripts');
function easy_to_use_admin_enqueue_scripts(){
	// wp_enqueue_script('jquery');
	wp_enqueue_script( 'easy-to-use-script', plugins_url( '/js/easy-to-use.js', __FILE__ ), array('jquery'), '1.1' );
	wp_enqueue_style( 'easy-to-use-style', plugins_url( '/css/easy-to-use.css', __FILE__ ), false, '1.1', 'all' );
}

