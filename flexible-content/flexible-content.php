<?php

/**
 * Flexible Content Renderer
 *
 * Loops through the ACF Flexible Content field
 * and loads the PHP file matching each layout name.
 */

// Check if the "content" Flexible Content field has rows.
if ( have_rows( 'content', get_the_ID() ) ) :

    // Loop through each Flexible Content row.
    while ( have_rows( 'content', get_the_ID() ) ) :

        the_row();
        // Get the current Flexible Content layout name.
        $layout = get_row_layout();
        // Load the PHP file matching the layout name.
        get_template_part(
            'flexible-content/layouts/' . $layout
        );

    endwhile;

endif;