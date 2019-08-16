<?php
/*
 * Template Name: Team template
*/
?>

<!-- get header -->
<?php get_header('landing'); ?>


<div class="page-main">


    <?php get_template_part( 'template-parts/sections/introduce' ); ?>


    <!-- section team -->
    <section class="section-team_main">

        <!-- teammate preview info -->
        <div class="container_team">
            <?php
            if( have_rows('teammate_cart') ):
                $i = 0;

                // loop through the rows of data
                while ( have_rows('teammate_cart') ) : the_row(); ?>
                    <?php
                    $i++;

                    if ($i == 1) : ?>
                        <div class="teammate-cart">
                            <img src="<?php the_sub_field('teammate_preview_image');?>" class="teammate-image active-tab" alt="teammate-image" num="<?php echo $i?>">
                            <h4 class="teammate-name teammate-name_header"><?php the_sub_field('teammate_name');?></h4>
                            <p class="teammate-position teammate-position_header"><?php the_sub_field('teammate_position');?></p>
                        </div>
                    <?php else : ?>
                        <div class="teammate-cart">
                            <img src="<?php the_sub_field('teammate_preview_image');?>" class="teammate-image" alt="teammate-image" num="<?php echo $i?>">
                            <h4 class="teammate-name teammate-name_header"><?php the_sub_field('teammate_name');?></h4>
                            <p class="teammate-position teammate-position_header"><?php the_sub_field('teammate_position');?></p>
                        </div>
                    <?php endif;  ?>

                <?php endwhile;
            else :
                // no rows found
            endif; ?>
        </div>

        <!-- teammate main info -->
        <div class="container_team-info">
            <?php
            if( have_rows('teammate_cart') ):
                $i = 0;
                while ( have_rows('teammate_cart') ) : the_row(); ?>
                    <?php
                    $i++;

                    if ($i == 1) : ?>
                        <div class="teammate-info" num="<?php echo $i?>" style="display: block">
                            <div class="teammate-photo" style="background-image: url(<?php the_sub_field('teammate_photo');?>")">
                                <span class="teammate_close-icon" num="<?php echo $i?>"><i class="fas fa-times"></i></i></span>
                            </div>

                            <h4 class="teammate-name"><?php the_sub_field('teammate_name');?></h4>
                            <p class="teammate-position"><?php the_sub_field('teammate_position');?></p>

                            <div class="teammate__info-text"><?php the_sub_field('teammate_info');?></div>
                        </div>
                    <?php else : ?>
                        <div class="teammate-info" num="<?php echo $i?>">
                            <div class="teammate-photo" style="background-image: url(<?php the_sub_field('teammate_photo');?>")">
                                <span class="teammate_close-icon" num="<?php echo $i?>"><i class="fas fa-times"></i></i></span>
                            </div>

                            <h4 class="teammate-name"><?php the_sub_field('teammate_name');?></h4>
                            <p class="teammate-position"><?php the_sub_field('teammate_position');?></p>

                            <div class="teammate__info-text"><?php the_sub_field('teammate_info');?></div>
                        </div>
                    <?php endif;  ?>

                <?php endwhile;
            else :
                // no rows found
            endif; ?>
        </div>

    </section>


</div>


<!-- get footer -->
<?php get_footer(); ?>
