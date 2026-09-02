<?php
/**
 * Page Template
 */
get_header();
?>

<main class="site-main">

    <?php
    // Load the ACF Flexible Content layouts.
    get_template_part( 'flexible-content/flexible-content' );
    ?>

</main>

<?php
get_footer();