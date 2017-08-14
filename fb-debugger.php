<?php
/*
Plugin Name: Facebook Debugger
Plugin URI: http://www.darkomitrovic.com/wp-plugin/facebook-debug/
Description: Debugging Sharing to Facebook.
Version: 1.0
Author: Darko Mitrovic
Author URI: http://www.darkomitrovic.com/
License: GPL2
*/
	 
add_action('admin_bar_menu', 'add_items',  100);
function add_items($admin_bar)
{
	
	if ( is_single() || is_page() ) 
	{
	 
		$args = array(
				'id'    => 'fb-debug',
				'title' => 'FB Debugger',
				'href'  => 'https://developers.facebook.com/tools/debug/og/object?q='.get_permalink( $post->ID ).'',
				'meta'  => array(
						'title' => __('Debug link'),
						'target' => '_blank'
						),
				);
	}
 
    $admin_bar->add_menu( $args);
}
?>