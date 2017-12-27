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

//Init BackEnd
function init(){
	 add_posttype_events();
	 add_metaboxes();
}

//Add PostType Events Global Web
function add_posttype_events(){
	require_once('post-type-events-globalweb.php');
}

//Add MetaBoxes
function add_metaboxes(){
	require_once('metaboxes/date.php');
	require_once('metaboxes/hour.php');
}


//Add Shortcodes
require_once('shortcodes-events-globalweb.php');


//Init BackEnd
init();