	<footer class="footer footer_demo" role="contentinfo">
        <div class="container">

            <!-- footer inner -->
            <div class="footer-inner">
                <!-- logo image -->
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php echo get_field( 'logo_image', 'option' ); ?>" class="logo-image" alt="logo-image">
                </a>

                <p class="white">
                    (c) 2019 Wingman AI Agents Ltd
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
