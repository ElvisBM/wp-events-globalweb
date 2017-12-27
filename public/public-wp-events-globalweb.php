<?php 
/**
 * Plugin Name: Events Global Web
 * Plugin URI: https://github.com/ElvisBM/wp-events-globalweb
 * Description: Plugin Create for Test Global Web
 * Version: 1.0.0
 * Author: Elvis B. Martins
 * Author URI: https://github.com/ElvisBM/
 * License: GPL2
 */


//Add Styles from Front-End
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
function enqueue_styles() {
	wp_enqueue_style('events-globalweb-css', plugin_dir_url( __FILE__ ) . 'css/wp-events-globalweb-public.css', array(), false );
}

//Add Styles from Back-end
add_action( 'wp_enqueue_scripts',  'enqueue_scripts' );
function enqueue_scripts() {
	wp_enqueue_script( 'events-globalweb-js', plugin_dir_url( __FILE__ ) . 'js/wp-events-globalweb-public.js', array( 'jquery' ), false );
}


