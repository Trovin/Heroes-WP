<!-- section empowers -->
<section class="section-empowers">
    <div class="container">

        <!-- empowers -->
        <div class="empowers">

            <div class="empowers-bac">
                <div class="empowers-inner">
                    <?php if (get_field('need_headling')): ?>
                        <h2 class="section-headling section-headling_empowers"><?php the_field('empowers_hedling'); ?></h2>
                    <?php endif; ?>

                    <?php if (get_field('need_info_text')): ?>
                        <div class="empowers-info"><?php the_field('empowers_info'); ?></div>
                    <?php endif; ?>

                    <?php if (get_field('need_button')): ?>

                        <?php if (get_field('need_red_button')): ?>
                            <span class="btn-wrapp btn-wrapp_center">
                                <a href="<?php echo get_field('empowers_button_url')?>" class="btn"><?php echo get_field('empowers_buttons_title')?></a>
                            </span>
                        <?php endif; ?>

                        <?php if ( !get_field('need_red_button')): ?>
                            <span class="btn-wrapp btn-wrapp_center">
                                <a href="<?php echo get_field('empowers_button_url')?>" class="btn btn_blue"><?php echo get_field('empowers_buttons_title')?></a>
                            </span>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>

        </div>

    </div>
</section>