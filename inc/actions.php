<?php
/**
 * This file is responsible to call actions or add actions.
 *
 * @link        https://lenderd.com
 * @since       1.0.0
 *
 * @package     mortgage_application
 * @sub-package mortgage_application/inc
*/
// If this file is called directly, abort.
defined('ABSPATH') OR die("Access denied!");
/*enqueue custom scripts and styles*/
add_action('wp_enqueue_scripts', 'mortgage_application_enqueue_scripts');
/* add shortcode to show application form*/
add_shortcode( 'mortgage_application_form', 'mortgage_application_form_callback' );