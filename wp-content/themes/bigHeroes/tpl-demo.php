<?php
/*
 * Template Name: Demo template
*/
?>

<!-- get header -->
<?php get_header('landing'); ?>


<div class="page-main">


    <?php get_template_part( 'template-parts/sections/introduce' ); ?>


    <div class="demo-empowers">
        <?php get_template_part( 'template-parts/sections/empowers' ); ?>
    </div>


    <?php get_template_part( 'template-parts/sections/subscribe-form' ); ?>


    <div class="section-contact">
        <div class="container">
            <h2 class="section-contact__headling"><?php the_field('demo_contact_headling');?></h2>
            <p class="section-contact__info"><?php the_field('demo_contact_info');?></p>
            <?php echo do_shortcode('[wpforms id="405" title="false" description="false"]'); ?>
        </div>
    </div>
</div>


<!-- get footer -->
<?php get_footer('demo'); ?>
