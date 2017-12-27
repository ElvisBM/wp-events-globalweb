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

//Function Run Plugin
function run_events_globalweb(){

	//Functions from Back-End/Admin
	admin_events_globalweb();

	//Functions from front-end
	public_events_globalweb();
}


//Functions from Back-End/Admin
function admin_events_globalweb(){
	require_once('admin/admin-wp-events-globalweb.php');
}


//Functions from front-end
function public_events_globalweb(){
	require_once('public/public-wp-events-globalweb.php');
}

//Run
run_events_globalweb();

