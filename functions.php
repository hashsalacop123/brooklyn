<?php

require_once('functions/wp_functions_enquee.php');
require_once('functions/wp_functions.php');
/**
 * Enqueue Brooklyn custom stylesheet.
 */

/**
 * Enable WordPress-managed document title.
 */
function brooklyn_theme_setup() {

    add_theme_support('title-tag');

}

add_action('after_setup_theme', 'brooklyn_theme_setup');
?>