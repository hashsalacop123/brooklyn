<!-- =========================================================
     SERVICES SECTION
========================================================= -->
<?php 
    $seo_title = get_sub_field('seo_title');
    $heading_title = get_sub_field('heading_title');
    $description = get_sub_field('description');
?>
<section id="services" class="section-padding services-section">
    <div class="container">
        <div class="section-heading text-center">
            <span class="eyebrow purple">
                <?php 
                        if($seo_title) :
                            echo esc_html($seo_title);
                        endif;
                    ?>
            </span>
            <h2>
                    <?php 
                        if($heading_title) :
                            echo esc_html($heading_title);
                        endif;
                    ?>
            </h2>
            <p>
                <?php 
                        if($description) :
                            echo esc_html($description);
                        endif;
                    ?>
            </p>
        </div>
        <div class="row g-4">
        <?php
        

$services = get_sub_field( 'services' );

foreach ( $services as $service ) {

    // Get the service fields.
    $icon        = $service['icon'];
    $title       = $service['title'];
    $description = $service['description'];
    $link        = $service['link'];

    ?>
 <!-- Service -->
            <div class="col-md-6 col-lg-4">
                <article class="service-card">
                    <?php if($icon) :  ?>
                    <div class="service-icon">
                        <?php echo $icon; ?>
                    </div>
                    <?php endif; ?>
                     <?php if($title) :  ?>
                        <?php  echo '<h3>' . esc_html( $title ) . '</h3>'; ?>
                     <?php endif; ?>
                
                    <?php if($description) :  ?>
                        <?php  echo '<p>' . esc_html( $description ) . '</p>'; ?>
                     <?php endif; ?>

                    <?php if($link) :  ?>
                        <?php echo '<a href="' . esc_url( $link ) . '">Learn More <i class="bi bi-arrow-right"></i></a>'; ?>
                     <?php endif; ?>
                </article>
            </div> 
<?php } ?> 

        </div>

    </div>

</section>