<?php
/*
 * Template Name: Home template
*/
?>

<!-- get header -->
<?php get_header('landing'); ?>


<div class="page-main">

    <!-- section intro -->
    <section class="section-intro">
        <div class="intro-bac" style="background-image: url(<?php the_field('intro_background_image'); ?>)">
            <div class="intro-bac__layer"></div>
        </div>

        <div class="wrapper">
            <h1 class="introduce-headling"><?php the_field('intro_headling');?></h1>
            <h3 class="introduce-info"><?php the_field('intro_info');?></h3>
        </div>

        <!-- section wingsman -->
        <section class="section-wingsman">
            <div class="container">

                <!-- wingsman -->
                <div class="wingsman">
                    <div class="wingsman-wrapp">
                        <img src="<?php the_field('wingsman_left_image');?>" class="wingsman-image wingsman-image_left" alt="wingsman-image">

                        <div class="wingsman-inner">
                            <p class="wingsman-info"><?php the_field('wingsman_info');?></p>
                            <p class="wingsman-subinfo"><?php the_field('wingsman_sub-info');?></p>
                        </div>

                        <img src="<?php the_field('wingsman_right_image');?>" class="wingsman-image wingsman-image_right" alt="wingsman-image">
                    </div>
                </div>

            </div>
        </section>
    </section>


    <div class="home-empowers">
        <?php get_template_part( 'template-parts/sections/empowers' ); ?>
    </div>


    <!-- section team -->
    <section class="section-team">
        <div class="container">
            <h2 class="section-headling section-headling_team"><?php the_field('team_headling');?></h2>

            <img src="<?php the_field('team_image_left');?>" class="wingsman-image wingsman-image_team-left" alt="wingsman-image">

            <div class="row">
                <?php
                if( have_rows('team_cart') ):
                    // loop through the rows of data
                    while ( have_rows('team_cart') ) : the_row(); ?>
                        <div class="col-lg-4">
                            <div class="team-cart">
                                <div class="team-cart__label">
                                    <img src="<?php the_sub_field('team_label_image'); ?>" class="team-cart__label-image" alt="label-image">
                                </div>

                                <p class="team-cart__info"><?php  the_sub_field('team_info'); ?></p>
                            </div>
                        </div>
                    <?php endwhile;
                else :
                    // no rows found
                endif; ?>
            </div>

            <img src="<?php the_field('team_image_right');?>" class="wingsman-image wingsman-image_team-right" alt="wingsman-image">

            <span class="btn-wrapp btn-wrapp_center">
                <a href="<?php  the_field('team_button_url'); ?>" class="btn btn_center"><?php  the_field('team_button_title'); ?></a>
            </span>
        </div>
    </section>


    <!-- section gaming -->
    <section class="section-gaming">
        <img src="<?php the_field('gaming_image');?>" class="gaming-image" alt="gaming-image">

        <div class="container-gaming">
            <h2 class="section-headling section-headling_gaming"><?php the_field('gaming_headling');?></h2>

            <div class="gaming-info"><?php the_field('gaming_info');?></div>
            <span class="btn-wrapp btn-wrapp_gaming">
                <a href="<?php the_field('gaming_button_url');?>" class="btn"><?php  the_field('gaming_button_title'); ?></a>
            </span>

        </div>

    </section>


    <!-- section decor -->
    <section class="section-decor"></section>


<!-- get footer -->
<?php get_footer(); ?>

