<!-- section potential -->
<section class="section-potential" style="background-image: url(<?php the_field('potential_background_image'); ?>")>

    <div class="container">

        <img src="<?php  the_field('potential_image_left'); ?>" class="potential-image potential-image_left" alt="hero-image">

        <div class="potential-inner">
            <div class="potential-info"><?php  the_field('potential_info'); ?></div>
            <div class="potential-sub_info"><?php  the_field('potential_sub-info'); ?></div>
        </div>

        <img src="<?php  the_field('potential_image_right'); ?>" class="potential-image potential-image_right" alt="hero-image">

    </div>
</section>