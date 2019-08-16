<?php
/*
 * Template Name: Tech template
*/
?>

<!-- get header -->
<?php get_header('landing'); ?>


<div class="page-main">


    <?php get_template_part( 'template-parts/sections/introduce' ); ?>


    <div class="tech-empowers">
        <?php get_template_part( 'template-parts/sections/empowers' ); ?>
    </div>


    <div class="tech-learning">
        <?php get_template_part( 'template-parts/sections/learning' ); ?>
    </div>

    <!-- section decor -->
    <section class="section-decor"></section>


</div>


<!-- get footer -->
<?php get_footer(); ?>
