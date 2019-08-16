<?php
/*
 * Template Name: Involved template
*/
?>

<!-- get header -->
<?php get_header('landing'); ?>


<div class="page-main">


    <?php get_template_part( 'template-parts/sections/introduce' ); ?>


    <div class="involved-empowers">
        <?php get_template_part( 'template-parts/sections/empowers' ); ?>
    </div>


    <div class="involved-learning">
        <?php get_template_part( 'template-parts/sections/learning' ); ?>
    </div>


    <?php get_template_part( 'template-parts/sections/service-cart-involved' ); ?>


</div>


<!-- get footer -->
<?php get_footer(); ?>
