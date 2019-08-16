<?php
/*
 * Template Name: Wingsman template
*/
?>

<!-- get header -->
<?php get_header('landing'); ?>


<div class="page-main">


    <?php get_template_part( 'template-parts/sections/introduce' ); ?>


    <div class="wingsman-empowers">
        <?php get_template_part( 'template-parts/sections/empowers' ); ?>
    </div>


    <div class="wingsman-learning">
        <?php get_template_part( 'template-parts/sections/learning' ); ?>
    </div>


    <div class="wingsman-service">
        <?php get_template_part( 'template-parts/sections/service-cart' ); ?>
    </div>

</div>


<!-- get footer -->
<?php get_footer(); ?>
