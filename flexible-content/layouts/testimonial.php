<!-- =========================================================
     TESTIMONIAL SECTION
========================================================= -->
<?php 
$seo_title = get_sub_field('seo_title');
$heading_title = get_sub_field('heading_title');
$testimonial = get_sub_field('testimonial');
?>
<section id="case-studies" class="section-padding testimonials-section">
    <div class="container">
        <div class="section-heading text-center">
            <?php if($seo_title) : ?>
            <span class="eyebrow purple">
                <?php echo esc_html($seo_title); ?>
            </span>
            <?php endif; ?>
            <?php if($heading_title) : ?>
                <?php echo '<h2>'.esc_html($heading_title).'</h2>'; ?>
            <?php endif; ?>
        </div>
<div class="row g-4">
        <?php 
            foreach ($testimonial as $testmonials) { 
                $name = $testmonials['name'];
                $words = $testmonials['words'];
                $position = $testmonials['position']; ?>
            <div class="col-md-4">
                <article class="testimonial-card">
                    <div class="quote-icon">
                        "
                    </div>
                    <?php 
                        if($words) : 
                             echo '<p>'.esc_html($words).'</p>';
                        endif;     
                    ?>
                    <div class="testimonial-author">
                        <?php 
                            $name_parts = explode( ' ', trim( $name ) );

                            $initials = strtoupper(
                                substr( $name_parts[0], 0, 1 ) .
                                substr( end( $name_parts ), 0, 1 )
                            );
                        ?>
                        <div class="avatar">
                            <?php 
                                if($initials) : 
                                    echo $initials;
                                endif;
                            ?>
                        </div>
                        <div>
                            <?php 
                                if($name) : 
                                    echo '<strong>'.esc_html($name).'</strong>';
                                endif;
                            ?>
                            <?php 
                                if($position) : 
                                    echo '<small>'.esc_html($position).'</small>';
                                endif;
                            ?>
                        </div>
                    </div>
                </article>
            </div>
           <?php } ?>
</div>
        <!-- <div class="row g-4">
            <div class="col-md-4">
                <article class="testimonial-card">
                    <div class="quote-icon">
                        "
                    </div>
                    <p>
                        "Brandly transformed our online presence.
                        Our traffic increased by 200% in just
                        3 months!"
                    </p>
                    <div class="testimonial-author">
                        <div class="avatar">
                            SJ
                        </div>
                        <div>
                            <strong>Sarah Johnson</strong>
                            <small>CEO, Nexora</small>
                        </div>
                    </div>
                </article>
            </div>
        </div> -->

    </div>
</section>
