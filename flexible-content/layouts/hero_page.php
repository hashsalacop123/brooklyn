<section id="hero" class="hero-section">
    <div class="container">

        <div class="row align-items-center g-5">
<?php 
$seo_title = get_sub_field( 'seo_title' );
$heading_title = get_sub_field('heading_title');
$description = get_sub_field('description');
$button_text = get_sub_field('button_text');
$button_url = get_sub_field('button_url');
$button_text_2 = get_sub_field('button_text_2');
$button_url_2 = get_sub_field('button_url_2');
$little_title = get_sub_field('little_title');

?>
         <!-- Hero Content -->
        <div class="col-lg-6">

                <span class="eyebrow">
                    <?php 
                        if($seo_title) :
                            echo esc_html($seo_title);
                        endif;
                    ?>
                </span>

                <h1>
                    <?php 
                        if($heading_title) :
                            echo esc_html($heading_title);
                        endif;
                    ?>
                   
                </h1>

                <p class="hero-description">
                <?php 
                        if($description) :
                            echo esc_html($description);
                        endif;
                    ?>
                </p>
                <div class="hero-buttons">
                          <?php 
                        if($button_text) :
                            echo '  <a href="'.$button_url.'" class="btn btn-primary-custom btn-lg">'.$button_text.'
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>';
                        endif; ?>                
                   <?php 
                        if($button_text_2) :
                            echo '<a href="'.$button_url_2.'" class="watch-link">
                            <span class="play-button"><i class="bi bi-play-fill"></i>
                            </span>"'.$button_text_2.'"</a>';
                        endif; ?>
                </div>
            </div>

            <!-- Dashboard -->
            <div class="col-lg-6 image-dashboards">
               <?php
                    $image_left = get_sub_field('image_left');
                    echo '<img src = "'.$image_left['url'].'" alt = "'.$image_left['alt'].'/">';
               ?>
            </div>
        </div>


        <!-- Trusted Brands -->
        <div class="trusted-brands">
                   <?php 
                        if($little_title) :
                            echo '<p>'.esc_html($little_title).'</p>';
                        endif;
                    ?>

            <div class="row align-items-center justify-content-center g-4">
<?php 
    $image_logo = get_sub_field('image_logo');
    
   

    foreach ($image_logo as $image_logos) {
        echo '<div class = "col-4 col-md ">';
                  $image = $image_logos['image_logo'];

        // Output the image.
        echo '<img src="' . esc_url( $image['url'] ) . '" alt="' . esc_attr( $image['alt'] ) . '">';
                    
       echo '</div>';
    }
    
?>

            </div>

        </div>

    </div>
</section>
