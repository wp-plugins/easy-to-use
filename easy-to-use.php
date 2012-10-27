<?php
/*
Plugin Name: Easy to use
Plugin URI: http://wordpress.org/extend/plugins/easy-to-use/
Description: Use your site more easy.
Version: 1.2
Author: webvitaly
Author URI: http://profiles.wordpress.org/webvitaly/
License: GPLv2 or later
*/

$easytouse_unqprfx_version = '1.2';

function easy_to_use_unqprfx_login_enqueue_scripts(){
	global $easytouse_unqprfx_version;
	// wp_enqueue_script('jquery');
	wp_enqueue_script( 'easy-to-use-script', plugins_url( '/js/easy-to-use.js', __FILE__ ), array('jquery'), $easytouse_unqprfx_version );
    wp_enqueue_style( 'easy-to-use-style', plugins_url( '/css/easy-to-use.css', __FILE__ ), false, $easytouse_unqprfx_version, 'all' );
}
add_action( 'login_enqueue_scripts', 'easy_to_use_unqprfx_login_enqueue_scripts' ); // add styles and scripts to login page


function easy_to_use_unqprfx_admin_enqueue_scripts(){
	global $easytouse_unqprfx_version;
	// wp_enqueue_script('jquery');
	wp_enqueue_script( 'easy-to-use-script', plugins_url( '/js/easy-to-use.js', __FILE__ ), array('jquery'), $easytouse_unqprfx_version );
	wp_enqueue_style( 'easy-to-use-style', plugins_url( '/css/easy-to-use.css', __FILE__ ), false, $easytouse_unqprfx_version, 'all' );
}
add_action('admin_enqueue_scripts', 'easy_to_use_unqprfx_admin_enqueue_scripts'); // add styles and scripts to admin


function easy_to_use_unqprfx_plugin_meta( $links, $file ) { // add 'Support' and 'Donate' links to plugin meta row
	if ( strpos( $file, 'easy-to-use.php' ) !== false ) {
		$links = array_merge( $links, array( '<a href="http://web-profile.com.ua/wordpress/plugins/easy-to-use/" title="Need help?">' . __('Support') . '</a>' ) );
		$links = array_merge( $links, array( '<strong><a href="http://web-profile.com.ua/donate/" title="Support the development">' . __('Donate') . '</a></strong>' ) );
	}
	return $links;
}
add_filter( 'plugin_row_meta', 'easy_to_use_unqprfx_plugin_meta', 10, 2 );