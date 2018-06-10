<?php
/*
Plugin Name: WP Footer Link
Plugin URI: http://graphicscove.github.io/updates-endpoint
Description: Opens the footer link to Wordpress in a new tab.
Author: Steven Noble
Author URI: http://graphicscove.com
Version: 1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function wpse_edit_footer() {
    add_filter( 'admin_footer_text', 'wpse_edit_text', 11 );
}

function wpse_edit_text($content) {
    return '<span id="footer-thankyou">Thank you for creating with <a href="https://wordpress.org/" target="_blank">WordPress</a>.</span>';
}

add_action( 'admin_init', 'wpse_edit_footer' );
