<?php
/*
Plugin Name: Easy-to-use
Plugin URI: http://wordpress.org/plugins/easy-to-use/
Description: Unmasks password inputs and enables 'remember-me' by default.
Version: 1.7
Author: webvitaly
Author URI: http://web-profile.com.ua/wordpress/plugins/
License: GPLv3
*/


if (!function_exists('easy_to_use_unqprfx_enqueue_scripts')):
	function easy_to_use_unqprfx_enqueue_scripts() { // add styles and scripts to login page
		// wp_enqueue_script('jquery');
		wp_enqueue_script('easy-to-use-script', plugins_url('/js/easy-to-use.js', __FILE__), array('jquery') );
		wp_enqueue_style('easy-to-use-style', plugins_url('/css/easy-to-use.css', __FILE__));
	}
	add_action('wp_enqueue_scripts', 'easy_to_use_unqprfx_enqueue_scripts'); // add scripts and styles to frontend section
	add_action('login_enqueue_scripts', 'easy_to_use_unqprfx_enqueue_scripts'); // add scripts and styles to admin section
	add_action('admin_enqueue_scripts', 'easy_to_use_unqprfx_enqueue_scripts'); // add scripts and styles to login section
endif;


if (!function_exists('easy_to_use_unqprfx_plugin_meta')):
	function easy_to_use_unqprfx_plugin_meta($links, $file) { // add 'Plugin page' and 'Donate' links to plugin meta row
		if (strpos($file, 'easy-to-use.php') !== false) {
			$links = array_merge($links, array('<a href="http://web-profile.com.ua/wordpress/plugins/easy-to-use/" title="Plugin page">Easy-to-use</a>'));
			$links = array_merge($links, array('<a href="http://web-profile.com.ua/donate/" title="Support the development">Donate</a>'));
		}
		return $links;
	}
	add_filter('plugin_row_meta', 'easy_to_use_unqprfx_plugin_meta', 10, 2);
endif;
