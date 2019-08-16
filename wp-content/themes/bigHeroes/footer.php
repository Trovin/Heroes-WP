	<footer class="footer" role="contentinfo">
        <div class="container">

            <!-- footer info -->
            <div class="footer-info">
                <?php get_template_part( 'template-parts/sections/subscribe-form' ); ?>
            </div>

            <!-- footer inner -->
            <div class="footer-inner">
                <!-- logo image -->
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php echo get_field( 'footer_logo_image', 'option' ); ?>" class="logo-image" alt="logo-image">
                </a>

                <p class="white">
                    © 2019 Wingman AI Agents Ltd. Website by 438
                </p>

                <!-- main navigation -->
                <nav class="main-nav main-nav_footer" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_class' => 'footer-nav__list', 'container' => false ) ); ?>
                </nav>
            </div>

        </div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
