<!-- =========================================================
     PRICING SECTION
========================================================= -->
<?php 
    $seo_title = get_sub_field('seo_title');
    $heading_title = get_sub_field('heading_title');
    $short_description = get_sub_field('short_description');
?>
<section id="pricing" class="section-padding pricing-section">

    <div class="container">

        <div class="section-heading text-center">
            <?php if($seo_title) : ?>
            <span class="eyebrow purple">
                <?php echo esc_html($seo_title); ?>
            </span>
            <?php endif; ?>

         <?php if($heading_title) : ?>
                <h2><?php echo esc_html($heading_title); ?></h2>
         <?php endif; ?>
         
        <?php if($short_description) : ?>
                <p><?php echo esc_html($short_description); ?></p>
         <?php endif; ?>
        </div>

        <?php
            $title_price_1 = get_sub_field('title_price_1');
            $price_1 = get_sub_field('price_1');
            $inclusion = get_sub_field('inclusion');
        ?>
        <div class="row g-4 align-items-center">

            <!-- Starter -->
            <div class="col-lg-4">

                <div class="pricing-card">

                      <?php if($title_price_1) : ?>
                         <h3><?php echo esc_html($title_price_1); ?></h3>
                     <?php endif; ?>

                    <?php if($price_1) : ?>
                        <div class="price">
                            <?php echo $price_1; ?>
                      </div>
                     <?php endif; ?>
                        
                    <ul>
                        <?php 
                            foreach ($inclusion as $inclusions) {
                                 $inclu = $inclusions['list'];
                                echo '<li>'.esc_html($inclu).'</li>';
                            }
                        ?>
                    </ul>
                    <a href="#contact" class="btn btn-outline-primary w-100">
                        Get Started
                    </a>
                </div>
            </div>

    <?php
            $title_price_2 = get_sub_field('title_price_2');
            $price_2 = get_sub_field('price_2');
            $inclusion_2 = get_sub_field('inclusion_2');
        ?>
            <!-- Growth -->
            <div class="col-lg-4">

                <div class="pricing-card pricing-featured">

                    <div class="popular-badge">
                        POPULAR
                    </div>
                 <?php if($title_price_2) : ?>
                         <h3><?php echo esc_html($title_price_2); ?></h3>
                     <?php endif; ?>

                    <?php if($price_2) : ?>
                        <div class="price">
                            <?php echo $price_2; ?>
                      </div>
                     <?php endif; ?>
                    <ul>
                        <?php 
                            foreach ($inclusion_2 as $inclusions_2) {
                                 $inclu2 = $inclusions_2['list'];
                                echo '<li>'.esc_html($inclu2).'</li>';
                            }
                        ?>
                    </ul>
                    <a href="#contact" class="btn btn-primary-custom w-100">
                        Get Started
                    </a>
                </div>
            </div>

    <?php
            $title_price_3 = get_sub_field('title_price_3');
            $price_3 = get_sub_field('price_3');
            $inclusion_3 = get_sub_field('inclusion_3');
        ?>
            <!-- Scale -->
            <div class="col-lg-4">

                <div class="pricing-card">
                    <?php if($title_price_3) : ?>
                         <h3><?php echo esc_html($title_price_3); ?></h3>
                     <?php endif; ?>

                   <?php if($price_3) : ?>
                        <div class="price">
                            <?php echo $price_3; ?>
                      </div>
                     <?php endif; ?>
                    <ul>
                        <?php 
                            foreach ($inclusion_3 as $inclusions_3) {
                                 $inclu2 = $inclusions_3['list'];
                                echo '<li>'.esc_html($inclu2).'</li>';
                            }
                        ?>
                    </ul>
                    <a href="#contact" class="btn btn-outline-primary w-100">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>
