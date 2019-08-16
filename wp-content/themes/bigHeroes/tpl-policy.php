<?php
/*
 * Template Name: Policy template
*/
?>

<!-- get header -->
<?php get_header('landing'); ?>


<div class="page-main">


    <?php get_template_part( 'template-parts/sections/introduce' ); ?>

    <div class="section-policy">
        <div class="container">
            <?php the_field('privacy_policy_text');?>
        </div>
    </div>


    <!-- section decor -->
    <section class="section-decor"></section>

</div>


<!-- get footer -->
<?php get_footer(); ?>
