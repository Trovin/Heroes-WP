<?php
/*
 * Template Name: Vision template
*/
?>

<!-- get header -->
<?php get_header('landing'); ?>


<div class="page-main">


    <?php get_template_part( 'template-parts/sections/introduce' ); ?>


    <div class="vision-empowers">
        <?php get_template_part( 'template-parts/sections/empowers' ); ?>
    </div>


    <div class="vision-potential">
        <?php get_template_part( 'template-parts/sections/potential' ); ?>
    </div>


    <!-- section decor -->
    <div class="vision-decor">
        <section class="section-decor"></section>
    </div>

</div>


<!-- get footer -->
<?php get_footer(); ?>
