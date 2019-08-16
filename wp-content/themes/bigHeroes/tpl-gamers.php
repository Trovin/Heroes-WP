<?php
/*
 * Template Name: Gamers template
*/
?>

<!-- get header -->
<?php get_header('landing'); ?>


<div class="page-main">


    <?php get_template_part( 'template-parts/sections/introduce' ); ?>


    <div class="gamers-empowers">
        <?php get_template_part( 'template-parts/sections/empowers' ); ?>
    </div>


    <div class="gamers-learning">
        <?php get_template_part( 'template-parts/sections/learning' ); ?>
    </div>

    <!-- section decor -->
    <section class="section-decor"></section>


</div>


<!-- get footer -->
<?php get_footer(); ?>
