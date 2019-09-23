<?php

/**
* Plugin Name: Add Sentence Plugin
* Plugin URI: http://www.kezber.com
* Description: My plugin
* Version: 1.0.0
* Author : Sébastien Daigle
* Author URI: http://kezber.com
**/

function AddFixContent( $content ) {
	$content .= "This is my fixed sentence provided by the plugin";
	return $content;
}

add_action( 'the_content', 'AddFixContent' );

?>