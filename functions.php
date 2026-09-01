<?php

/**
 * Enqueue Brooklyn custom stylesheet.
 */
function brooklyn_enqueue_styles() {

    wp_enqueue_style(
        'brooklyn-style',
        get_template_directory_uri() . '/style.css',
        array(),
        '1.0.0'
    );

}

add_action('wp_enqueue_scripts', 'brooklyn_enqueue_styles');
?>