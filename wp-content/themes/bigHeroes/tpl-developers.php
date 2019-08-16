<?php
/*
 * Template Name: Developers template
*/
?>

<!-- get header -->
<?php get_header('landing'); ?>


<div class="page-main">


    <?php get_template_part( 'template-parts/sections/introduce' ); ?>


    <div class="developers-empowers">
        <?php get_template_part( 'template-parts/sections/empowers' ); ?>
    </div>


    <div class="developers-potential">
        <?php get_template_part( 'template-parts/sections/potential' ); ?>
    </div>


    <!-- section decor -->
    <section class="section-decor"></section>


</div>


<!-- get footer -->
<?php get_footer(); ?>
