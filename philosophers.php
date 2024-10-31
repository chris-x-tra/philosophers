<?php
/*
  Plugin Name: Philosophers
  Description: listen to Lao Tze, Buddha, Confucius
  Author: Chrissie Brown
  Date: 10.2024
*/


require_once plugin_dir_path(__FILE__) . 'fortune.php';
require_once plugin_dir_path(__FILE__) . 'phil-functions.php';

// Hook the 'admin_menu' action hook
add_action( 'admin_menu', 'phil_Add_My_Admin_Link' );

// Add a new top level menu link 
// TODO make admin page better
function phil_Add_My_Admin_Link()
{
      add_menu_page(
        '.oO Philosophers Oo.', 			// Title of the page
        'Philosophers', 				// Text to show on the menu link
        'manage_options', 				// Capability requirement to see the link
        plugin_dir_path(__FILE__).'phil-page.php' 	// file to display when clicking the link
    );
}

// use shortcode
// you can use [philosophers] in code of a page
function philosophers_func($a) {
  include plugin_dir_path(__FILE__) . 'phil-page.php';
}

add_shortcode( 'philosophers', 'philosophers_func' );

