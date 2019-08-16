<?php get_header(); ?>

	<main id="main" class="default-page" role="main">

		<section class="error-404 not-found">

			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'theme' ); ?></h1>
			</header>

			<div class="page-content">
                <div class="container">

                    <span class="btn-wrapp btn-wrapp_center btn-wrapp_center-error">
                        <a href="<?php echo get_home_url(); ?>" class="btn btn_blue">Go to home ?</a>
                    </span>
                </div>
			</div>

		</section>

	</main>

<?php get_footer(); ?>
