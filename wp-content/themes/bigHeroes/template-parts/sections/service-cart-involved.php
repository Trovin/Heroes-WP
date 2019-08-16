<!-- section service -->
<section class="section-service">
    <div class="container">

        <div class="row service-container">
            <?php
            if( have_rows('service_cart') ):
                // loop through the rows of data
                while ( have_rows('service_cart') ) : the_row(); ?>

                    <div class="service-container__item">
                        <div class="service-cart">
                            <img src="<?php the_sub_field('service_cart_image'); ?>" class="service-image" alt="service-image">

                            <h4 class="service-headling"><?php  the_sub_field('service_headling'); ?></h4>
                            <p class="service-info"><?php  the_sub_field('service_info'); ?></p>

                            <span class="btn-wrapp btn-wrapp_center btn-wrapp_service">
                                <a href=<?php  the_sub_field('service_button_url'); ?>" class="btn btn_blue"><?php  the_sub_field('service_button_title'); ?></a>
                            </span>
                        </div>

                    </div>

                <?php endwhile;
            else :
                // no rows found
            endif; ?>
        </div>

    </div>
</section>