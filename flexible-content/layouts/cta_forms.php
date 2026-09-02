<!-- =========================================================
     CONTACT / LEAD GENERATION
========================================================= -->
<section id="contact" class="section-padding contact-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <!-- Contact Content -->
             <?php 
                $seo_title = get_sub_field('seo_title');
                $heading_title = get_sub_field('heading_title');
                $description = get_sub_field('description');
                $text_area_left_shortcode = get_sub_field('text_area_left_shortcode');
             ?>
            <div class="col-lg-4">
                <?php if($seo_title) : ?>
                <span class="eyebrow purple">
                    <?php echo esc_html($seo_title); ?>
                </span>
                <?php endif; ?>
                <?php if($heading_title) : ?>
                <h2>
                    <?php echo esc_html($heading_title); ?>
                </h2>
                <?php endif; ?>
                    <?php 
                        if($description) :
                            echo $description;
                        endif;
                    ?>

            </div>


            <!-- Lead Form -->
            <div class="col-lg-8">

                <div class="contact-form-card">

                  <?php echo do_shortcode( '[contact-form-7 id="d8e9bf7" title="Contact form 1"]' ); ?>
                </div>
            </div>
        </div>


        <!-- =================================================
             FORM STATES
        ================================================== -->
        <!-- <div class="row g-4 mt-5">

            <div class="col-md-4">

                <div class="state-card loading-state">
                    <span class="state-icon">
                        <span class="spinner-border spinner-border-sm"></span>
                    </span>

                    <div>
                        <small>LOADING STATE</small>
                        <p>Submitting your message...</p>
                    </div>
                </div>

            </div>


            <div class="col-md-4">

                <div class="state-card success-state">
                    <span class="state-icon">
                        <i class="bi bi-check-circle"></i>
                    </span>

                    <div>
                        <small>SUCCESS STATE</small>
                        <p>Thank you! Your message has been sent successfully.</p>
                    </div>
                </div>

            </div>


            <div class="col-md-4">

                <div class="state-card error-state">
                    <span class="state-icon">
                        <i class="bi bi-exclamation-circle"></i>
                    </span>

                    <div>
                        <small>ERROR STATE</small>
                        <p>Something went wrong. Please try again later.</p>
                    </div>
                </div>

            </div>

        </div> -->

    </div>

</section>
