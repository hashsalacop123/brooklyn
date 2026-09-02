<?php

/**
 * Enqueue Brooklyn frontend styles and scripts.
 */
function brooklyn_enqueue_assets() {

    // Bootstrap 5 CSS.
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        '5.3.3'
    );

    // Bootstrap Icons.
    wp_enqueue_style(
        'bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css',
        array(),
        '1.11.3'
    );

    // Brooklyn custom stylesheet.
    wp_enqueue_style(
        'brooklyn-style',
        get_stylesheet_uri(),
        array('bootstrap'),
        '1.0.0'
    );

    // Bootstrap 5 JavaScript bundle.
    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.3',
        true
    );

}

add_action('wp_enqueue_scripts', 'brooklyn_enqueue_assets');