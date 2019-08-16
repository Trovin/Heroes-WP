<?php get_header('landing'); ?>

	<main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'single'); ?>

        <?php endwhile; ?>

	</main>

<?php get_footer(); ?>
