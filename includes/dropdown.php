<?php
/**
 *	CREDITS
 *	Author: Rian Rietveld
 *	Plugin URI: http://genesis-accessible.org/
 *	
 *	Last updated Nov 2014
 */

add_action( 'wp_enqueue_scripts', 'genwpacc_dropdown_scripts' );
function genwpacc_dropdown_scripts() {

	wp_enqueue_script( 'genwpacc-dropdown',  CHILD_DIR . '/js/dropdown.js', array( 'jquery' ), false, true );

}
